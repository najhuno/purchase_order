<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class roleController extends Controller
{
	public function showElement(){
		$id_role = DB::table('Role')->get();

		return view("role",compact(['id_role']));

	}	
}