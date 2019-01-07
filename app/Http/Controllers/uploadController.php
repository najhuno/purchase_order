<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class uploadController extends Controller
{
	public function showElement(){
	
	$t_tahun = DB::table('t_tahun')->get();
		return view('upload',compact(("t_tahun")));
	}
}
