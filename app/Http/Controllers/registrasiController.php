<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class registrasiController extends Controller
{
	public function showRoleRegistrasi()
	{

       	return view('registrasi');
	}
	public function input_registrasi(Request $request){
		
		$Id_reg_vdr			= $request->get('id_reg_vdr');
		$Nama_pengguna		= $request->get('nama_pengguna');
        $Telepon			= $request->get('telepon');
        $Email				= $request->get('email');
        $Penanggung_jawab	= $request->get('penanggung_jawab');

        
// dd($Nama_pengguna);
        DB::select("call spInsertregistrasi('$nama_pengguna','$telepon','$email','$penanggung_jawab')");
        	//->where('id_reg_vdr',$Id_reg_vdr)

        $msg['msg'] = 'Success Insert';

        return json_encode($msg);
  }
}