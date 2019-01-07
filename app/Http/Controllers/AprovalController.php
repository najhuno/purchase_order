<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AprovalController extends Controller
{
	public function showElement(){

	$t_tahun = DB::table('t_tahun')->get();

		return view('Aproval',compact(("t_tahun")));
	}
}