<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{

    public function index()
    {
        $user = Auth::id();
                // dd(count($notif));
        // dd($user);
        return view('index',compact('user'));
    }

    public function bird()
    {
        $bird = DB::table('birds')
                ->leftJoin('users',function($join){
                    $join->on('users.id','=','birds.seller_id');
                })
                ->select('*','birds.id as id')
                ->get();
        // dd($bird);
        return view('bird',compact('bird'));
    }

    public function detailBird($id)
    {
        $bird = DB::table('birds')
                ->where('id',$id)
                ->first();
        // dd($bird);
        return view('detail_bird',compact('bird'));
    }
}
