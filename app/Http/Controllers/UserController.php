<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Product;

class UserController extends Controller
{
    function index(Request $request){
	   if($request->session()->has('username')){
				return view('userhome.index');
	   }
	   else{
		   return redirect('/login');
	   }
	}
}
