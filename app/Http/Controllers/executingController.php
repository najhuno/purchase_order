<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class executingController extends Controller
{
	public function Element(){
	
	$t_tahun = DB::table('t_tahun')->get();

		return view('executing',compact(("t_tahun")));
	}
}