<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class inisiasiController extends Controller
{
	public function inisiation() {
		$data['data'] = DB::table('ord_inisiasi')->get();
		$data['title'] = 'ord_inisiasi';
		$t_tahun = DB::table('t_tahun')->get();
		
		return view('inisiasi',$data,compact('t_tahun'));
	}
	public function edit_inisiasi(Request $request){
		$id_ord 		= $request->get('id_ord');
		$Nama_pengadaan = $request->get('Nama_pengadaan');
		$Pola_pengadaan = $request->get('Pola_pengadaan');
		$Tanggal = $request->get('date1');


		$updateArr = array('id_ord' => $id_ord,'Nama_pengadaan' => $Nama_pengadaan,'Pola_pengadaan' => $Pola_pengadaan,'Tanggal' => $Tanggal);
// dd($updateArr);
		DB::table('ord_inisiasi')
			->where('id_ord',$id_ord)
			->update($updateArr);
		$msg['msg'] = 'Success Update';


		return json_encode($msg);
	}
	public function delete_inisiasi(Request $request){
    	$inisiasi = $request->get('id_inisiasi');
		$datablack = DB::select("call spdeleteinisiasi('".$inisiasi."')");


		 $data ['content'] = $datablack;
        $msg['msg'] = 'Success Delete';
        return json_encode($data);
}
}