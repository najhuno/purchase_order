<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class planningController extends Controller
{
	public function showElement(){
	
	$t_tahun = DB::table('t_tahun')->get();
		
		return view('planning',compact(("t_tahun")));
	}
}