<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Costumer;

class namadbController extends Controller
{
    public function getNamaDB(){
    	$costumer = Costumer::all();
    	return view('namadb', [
    		'costumer' => $costumer
    		]);
    }
}
