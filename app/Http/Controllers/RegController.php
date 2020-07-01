<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
	public function form(){
		return view('form');
	}

	public function sapa(Request $request){
		// var_dump($request);
		// dd($request["alamat"]);
		return "halo";
	}

	public function sapa_post(Request $request){
		// dd($request->all());
		$nama = $request["nama"];
		return $nama;
	}
}
