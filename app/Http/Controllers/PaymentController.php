<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Services\Midtrans\CreateSnapTokenService;
class PaymentController extends Controller
{
    public function pay($id){
        $order = DB::table('orders')
                    ->leftJoin('birds',function($join){
                        $join->on('birds.id','=','orders.id_burung');
                    })
                    ->leftJoin('users',function($join){
                        $join->on('users.id','=','id_user');
                    })
                    ->where('snap_token',$id)
                    ->first();
        $seller = DB::table('users')
                        ->where('id',$order->seller_id)
                        ->first();
        $snap_token = $id;
        // dd($seller);
        return view('detail_payment',compact('order','snap_token','seller'));
    }
    public function updateStatus($id)
    {
        $order = DB::table('orders')
                        ->where('snap_token',$id)
                        ->first();
        $data = Http::withBasicAuth('SB-Mid-server-zGJNqNowvFXUB6lnHm9F6h_j','')->get('https://api.sandbox.midtrans.com/v2/'.$order->id.'/status')->json();
        // $data = Http::withBasicAuth('SB-Mid-server-zGJNqNowvFXUB6lnHm9F6h_j','')->get('https://api.sandbox.midtrans.com/v2/'.$order->id.'/status')->json();
        $update = DB::table('orders')
                    ->where('snap_token',$id)
                    ->update([
                        'status' => $data['transaction_status']
                    ]);
        $delete = DB::table('carts')
                    ->where('id_user',$order->id_user)
                    ->delete();
        toast('Pembayaran Berhasil','success');

        return redirect()->route('status');
    }
    public function updateCod($id)
    {
        $update = DB::table('orders')
                    ->where('id',$id)
                    ->update([
                        'status_cod' => 'Telah Cod'
                    ]);
        toast('Berhasil Update Status Cod','success');
        return redirect()->back();
    }
}
