<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;

class RegistrationController extends Controller
{
     function registeruserindex(){
        return view('registration.index');
    }

    function registeruser(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone =$request->phone;
        $user->username = $request->username;
        $user->password =$request->password;
        $user->email ='user@gmail.com';
        $user->location ='Kuril';

        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.index');
        }
    }

    function registeradminindex(){
    	return view('registration.adminindex');
    }
    function registeradmin(Request $request){
    	 $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $admin = new Admin();
        $admin->username = $request->username;
        $admin->password =$request->password;

        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.adminindex');
        }
    }

}
