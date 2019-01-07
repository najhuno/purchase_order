<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WhitelistController extends Controller
{
	public function show() {
 	$vendor['vendor'] = DB::table('vdr_whitelist')->get();
    $vendor['title'] = 'vdr_whitelist';
		return view('Whitelist', $vendor);
	}
public function delete_white(Request $request){
    	$vcategory = $request->get('id_vendor');
		$datablack = DB::select("call spwhitelist('".$vcategory."')");

		$data ['content'] = $datablack;
        $msg['msg'] = 'Success Delete';
        return json_encode($data);
}
public function filter_white(Request $request){
		
		$white = $request->get('search_white');
		

       $list = DB::select("call spcariwhite('".$white."')");
		$data ['content'] = $list;

		return json_encode($data);
	}
	public function edit_white(Request $request){
		$id_vdr = $request->get('id_vdr');
		$Reason = $request->get('Reason');
		$Start = $request->get('date1');
		$End = $request->get('date2');
		$Vendor = $request->get('Vendor');
		$updateArr = array('id_vdr' => $id_vdr,'Reason' => $Reason,'Start' => $Start,'End' => $End,'Vendor' => $Vendor);

		DB::table('vdr_whitelist')
			->where('id_vdr',$id_vdr)
			->update($updateArr);
		$msg['msg'] = 'Success Update';


		return json_encode($msg);
	}
	public function input_white(Request $request){	
        $Vendor 			= $request->get('Vendor');
        $Reason 			= $request->get('Reason');
        $Start 				= $request->get('Start');
        $End 				= $request->get('End');
        $Evidence 			= $request->get('Evidence');
        $tgl 				= date('Y-m-d', strtotime($Start));
        $tanggal 			= date('Y-m-d', strtotime($End));
        // DB::select("call spinputclosing('$paket_pengadaan','$tgl_closing')");
        DB::table('vdr_whitelist')->Insert([
        	['Vendor' => $Vendor, 'Reason' => $Reason,'Start' => $tgl,'End' => $tanggal,'Evidence' => $Evidence	,'status'=> 1]
        ]);
        $msg['msg'] = 'Success Insert';

        return json_encode($msg);
  }
}