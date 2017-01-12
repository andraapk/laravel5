<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
    public function nama() {
    	$data=[
    		'first_name' => "Andra",
    		'last_name' => "Rifani"
    	];		
    	return view('name.nama', $data);    		
    }
}
