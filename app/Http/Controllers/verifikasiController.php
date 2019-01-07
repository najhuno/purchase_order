<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class verifikasiController extends Controller
{
	public function showRoleRegistrasi()
	{

       	return view('verifikasi');
	}
}