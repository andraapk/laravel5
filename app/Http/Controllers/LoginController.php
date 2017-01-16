<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function masuk(Request $request) {
   		if($request['username']=='Andra'&&$request['password']=='ASD'){
   			return view('login.hasil', [
   				'login' => true,
   				'nama' => $request['username']
   			]);
   		
   		}
   		else {
   			return view('login.hasil', [
   				'login' => false]);
   		}
   	}
}
