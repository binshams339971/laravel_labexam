<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Product;
use App\order;

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
	function buyindex($id){
		$product = Product::find($id);
		return view('userhome.buy')->with('user', $product);
	}
	function buy(Request $request){
		$ord = new order();
		$ord->name = $request->name;
		$ord->category = $request->category;
		$ord->price = $request->price;
		$ord->username = session('username');
		$ord->save();
		return redirect()->route('userhome.index');
	}

	function cart($id){
		$array_product = array(); 
		array_push($array_product, $id);
		return redirect()->route('userhome.index');
	}
}
