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
	   		$stds = Product::all();
            return view('userhome.index')->with('users', $stds);
	   }
	   else{
		   return redirect('/login');
	   }
	}

	function ramindex(){
		$stds = Product::where('category', 'ram')
						->get();
		//print_r($stds);
        return view('userhome.ram')->with('users', $stds);
	}

	function storageindex(){
		$stds = Product::where('category', 'harddisk')
						->get();
        return view('userhome.storage')->with('users', $stds);
	}

	function processorindex(){
		$stds = Product::where('category', 'processor')
						->get();
		//print_r($stds);
        return view('userhome.processor')->with('users', $stds);
	}

	function casingindex(){
		$stds = Product::where('category', 'casing')
						->get();
        return view('userhome.casing')->with('users', $stds);
	}

	function gcardindex(){
		$stds = Product::where('category', 'gcard')
						->get();
        return view('userhome.gcard')->with('users', $stds);
	}
}
