<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class closingController extends Controller
{
	public function close(){
		$data['data'] 	= DB::table('ord_closing')->get();
		$data['title'] 	= 'ord_closing';
		
		return view('closing',$data);
	}
	public function inputclosing(Request $request){

        $paket_pengadaan = $request->get('paket');
        $tgl_closing	 = $request->get('date1');
dd($tgl_closing);
        DB::select("call spInsertclosing('$paket_pengadaan','$tgl_closing')");

        $msg['msg'] = 'Success Insert';

        return json_encode($msg);
  	}
	public function edit_closing(Request $request){
		
		$id_closing		= $request->get('id_closing');
		$pkt_pengadaan	= $request->get('paket_pengadaan');
		$tgl_closing	= $request->get('date1');
		


		$updateArr = array('id_closing' => $id_closing,'paket_pengadaan' => $pkt_pengadaan,'tgl_closing' => $tgl_closing);
//dd($data);
		DB::table('ord_closing')
			->where('id_closing',$id_closing)
			->update($updateArr);
		$msg['msg'] = 'Success Update';


		return json_encode($msg);
	}
	public function delete_closing(Request $request){

    	$paket_pengadaan = $request->get('paket');

      	$dataclos = DB::select("call spdeleteclosing('".$paket_pengadaan."')");


       $data ['content'] = $dataclos;
          $msg['msg'] = 'Success Delete';
          return json_encode($data);
  	}
  	public function filter_closing(Request $request){
    
    $paket_pengadaan = $request->get('search_clos');
    
//dd($paket_pengadaan);
    $closing = DB::select("call sppencarianclos('".$paket_pengadaan."')");
    $data ['content'] = $closing;

    return json_encode($data);
  }
}