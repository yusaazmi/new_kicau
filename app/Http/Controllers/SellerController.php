<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;

class SellerController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('seller')) {
            return view('seller.index');
        } else {
            return redirect('/');
        } 
    }
    public function bird()
    {
        $birds = DB::table('birds')
                    ->where('seller_id',Auth::id())
                    ->get();
        return view('seller.bird',compact('birds'));
    }
    public function inputBird()
    {
        return view('seller.form_bird');
    }
    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->roles()->attach(Role::where('name','seller')->first());

        return $user;
    }
    
    public function saveBird(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'gambar' => ['required']
        ]);
        // dd($request->all());
        // dd(Auth::id());
        if($validate->fails()){
            // toast($validate->messages()->all()[0], 'error');
            toast($validate->messages()->all()[0],'error');
            // Alert::error($validate->messages()->all()[0], 'Error');
            return back();
        }
        $file = $request->file('gambar');
        $upload_file = 'src/images/birds';
        $file->move($upload_file,$file->getClientOriginalName());
        DB::table('birds')
            ->insert([
                'jenis_burung' => $request->jenis_burung,
                'jenis_kelamin' => $request->jenis_kelamin,
                'umur' => $request->umur,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $file->getClientOriginalName(),
                'seller_id' => Auth::id(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        toast('Berhasil Upload', 'success');
        return redirect()->back();
    }

    public function editBird($id)
    {
        $birds = DB::table('birds')
                    ->where('id',$id)
                    ->first();
        // dd($birds->id);

        return view('seller.edit_bird',compact('birds'));
    }
    public function saveEditBird($id,Request $request)
    {
        $validate = Validator::make($request->all(), [
            'gambar' => ['required']
        ]);
        // dd($request->all());
        // dd(Auth::id());
        if($validate->fails()){
            // toast($validate->messages()->all()[0], 'error');
            toast($validate->messages()->all()[0],'error');
            // Alert::error($validate->messages()->all()[0], 'Error');
            return back();
        }
        $file = $request->file('gambar');
        $upload_file = 'src/images/birds';
        $file->move($upload_file,$file->getClientOriginalName());
        DB::table('birds')
            ->where('id',$id)
            ->update([
                'jenis_burung' => $request->jenis_burung,
                'jenis_kelamin' => $request->jenis_kelamin,
                'umur' => $request->umur,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $file->getClientOriginalName(),
                'seller_id' => Auth::id(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            
        toast('Berhasil Update Burung', 'success');
        return redirect()->back();
    }

    public function deleteBird($id)
    {
        $delete = DB::table('birds')
                    ->where('id',$id)
                    ->delete();
        toast('Burung Berhasil Dihapus','success');
        return redirect()->back();
    }

    // Order

    public function order($id)
    {
        $order = DB::table('orders')
                    ->leftJoin('birds',function($join){
                        $join->on('birds.id','=','orders.id_burung');
                    })
                    ->leftJoin('users',function($join){
                        $join->on('users.id','=','orders.id_user');
                    })
                    ->where('orders.seller_id',$id)
                    ->get();
                    // dd($order);
        return view('seller.order',compact('order'));
    }
}