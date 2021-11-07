<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index(Request $request)
    {
  
        if ($request->user()->hasRole('user')) {
            return redirect('user');
        }

        if ($request->user()->hasRole('seller')){
            return redirect('seller');
        }
 
    }
}
?>