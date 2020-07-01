<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function register(){
		return view('register');
	}

	public function register_post(Request $request){
		// dd($request->all());
		$first_name = $request["first_name"];
		$last_name = $request["last_name"];
		return view('welcom',["first_name"=>$first_name, "last_name"=>$last_name]);
	}

	public function welcome(){
		return view('welcom');
	}
}
