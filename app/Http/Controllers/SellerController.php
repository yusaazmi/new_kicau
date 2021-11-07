<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

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
        return view('seller.bird');
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
            'gambar' => ['required', 'file']
        ]);
        if($validate->fails()){
            toast($validate->messages()->all()[0], 'error');
            return back();
        }
        $file = $request->file('gambar');
        $upload_file = 'src/images/birds';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        DB::table('birds')
            ->insert([
                'jenis_burung' => $request->jenis_burung,
                'jenis_kelamin' => $request->jenis_kelamin,
                'umur' => $request->umur,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $file->getClientOriginalName,
            ]);
        toast('Berhasil Upload', 'success');
        return redirect()->back();
    }
}