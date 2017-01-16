<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index() {
		$data=[
   		'facebook' => "Andra Rifani",
   		'twitter' => "@andraapk",
   		'instagram' => "@andrapk",
   		'slack' => "andraapk"
   	];
   	return view('task.index', $data);
	}
	public function ask() {
		$data=[
 			'facebook' => "Adrianus Handhata",
 			'twitter' => "@adrianushandhata",
 			'instagram' => "@tatajelek",
 			'slack' => "adrianushandhata"
 		];
 		return view('task.ask', $data);
 	}
	public function tes() {
 		$data=[
 			'facebook' => "Ko Budi Purnomo",
 			'twitter' => "@budiP",
 			'instagram' => "@budi963",
 			'slack' => "@budi"
 		];
 		return view('task.tes', $data);
 	}
}
