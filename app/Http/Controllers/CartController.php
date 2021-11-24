<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use App\Order;
use App\Services\Midtrans\CreateSnapTokenService;


class CartController extends Controller
{

    public function index($id)
    {

        $total = DB::table('birds')
                    ->join('carts','carts.id_burung','=','birds.id')
                    ->where('carts.id_user',$id)
                    ->sum('harga');
        $cart = DB::table('carts')
                    ->leftJoin('birds',function($join){
                        $join->on('birds.id','=','carts.id_burung');
                    })
                    ->leftJoin('users',function($join){
                        $join->on('birds.seller_id','=','users.id');
                    })
                    ->select('*','name as seller_name','carts.id as id_cart')
                    // ->sum('harga')
                    ->where('id_user',Auth::id())
                    ->get();
        // dd($cart);
        $count = count($cart);
        // dd($cart);
        $user = Auth::user();
        // dd($user->name);
        if($count >= 1){
            $user = Auth::id();
            return view('/checkout', compact('cart','total','user'));
        }
        else if($count<1)
        {
            return redirect('/bird')->with('status','Keranjang anda masih kosong!'); 
        }
    }
    public function addCart(Request $request)
    {
        $bird = DB::table('birds')
                    ->leftJoin('users',function($join){
                        $join->on('users.id','=','birds.seller_id');
                    })
                    ->where('birds.id',$request->id_burung)
                    ->first();
        // dd($request);
        $carts = DB::table('carts')    
                    ->insert([
                        'id_user' => Auth::id(),
                        'id_burung' => $request->id_burung,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
        toast('Berhasil memasukan ke keranjang','success');
        return redirect()->back();
    }
    public function removeCart($id)
    {
        $delete = DB::table('carts')
                    ->where('id',$id)
                    ->delete();
        toast('Pemesanan berhasil dihapus!','success');
        return redirect()->back();
    }
    public function orderPayment($id,Request $request)
    {
        // dd($request->all());
        $cart = DB::table('carts')
                    ->where('id_user',Auth::user()->id)
                    ->get('id_burung');
        // dd($burung = json_encode($cart));
        $try_insert = Order::create([
            'id_user' => Auth::user()->id,
            'id_burung' => $request->id_burung,
            'cod' => $request->cod,
            'total_price' => $request->total_price,
            'snap_token' => null,
            'status' => 'waiting payment',
            'status_cod' => 'Belum Cod',
            'seller_id' => $request->seller_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // dd($try_insert->id);
        $update = Order::find($try_insert->id);
        // dd($update->total_price);
            $midtrans = new CreateSnapTokenService($update);
            $snapToken = $midtrans->getSnapToken();
            // dd($order);
            $update->snap_token = $snapToken;
            $update->save();
            // $order = Order::where('id_user',Auth::user()->id);
                        

            // dd($snapToken);
        $order = DB::table('orders')
                    ->leftJoin('birds',function($join){
                        $join->on('birds.id','=','orders.id_burung');
                    })
                    ->where('id_user',Auth::user()->id)    
                    ->get();        
        // dd($order);
        toast('Pembayaran telah dibuat, silahkan selesaikan pembayaran','success');
        // return redirect()->route('status');
        return redirect()->route('status');
    }
    public function status()
    {
        $order = DB::table('orders')
                    ->leftJoin('birds',function($join){
                        $join->on('birds.id','=','orders.id_burung');
                    })
                    ->where('id_user',Auth::user()->id)
                    ->select('*','orders.id as order_id')
                    ->get();
        // dd($order);
        $tokeen = DB::table('orders')
                    ->leftJoin('birds',function($join){
                        $join->on('birds.id','=','orders.id_burung');
                    })
                    ->where('id_user',Auth::user()->id)
                    ->get('snap_token');
        $token = json_decode($tokeen);
        // dd($order);
        return view('status',compact('order','token'));
    }
}
