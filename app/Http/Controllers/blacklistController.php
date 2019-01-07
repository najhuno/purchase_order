<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class blacklistController extends Controller
{
	public function index() {
		$vendor['vendor'] = DB::table('vdr_blacklist')->get();
		$vendor['title'] = 'vdr_blacklist';

		return view('blacklist',$vendor);
		// view('blacklist',compact(['vendor']));
		//return view('Group',compact(['data']));
	}
 
	public function edit_vendor(Request $request){
		$id_vdr = $request->get('id_vdr');
		$Reason = $request->get('Reason');
		$Start = $request->get('date1');
		$End = $request->get('date2');
		$Vendor = $request->get('Vendor');
		$updateArr = array('id_vdr' => $id_vdr,'Reason' => $Reason,'Start' => $Start,'End' => $End,'Vendor' => $Vendor);

		DB::table('vdr_blacklist')
			->where('id_vdr',$id_vdr)
			->update($updateArr);
		$msg['msg'] = 'Success Update';


		return json_encode($msg);
	}
	public function delete_black(Request $request){
      	$vcategory = $request->get('id_vendor');
    	$datablack = DB::select("call spblacklist('".$vcategory."')");


     	$data ['content'] = $datablack;
				   
	        $msg['msg'] = 'Success Delete';
	        return json_encode($data);
}
public function filter_black(Request $request){
		
		$black = $request->get('search_black');
		

       $list = DB::select("call spcariblack('".$black."')");
		$data ['content'] = $list;

		return json_encode($data);
	}
	public function input_black(Request $request){	
        $Vendor 			= $request->get('Vendor');
        $Reason 			= $request->get('Reason');
        $Start 				= $request->get('Start');
        $End 				= $request->get('End');
        $Evidence 				= $request->get('Evidence');
        $tgl 				= date('Y-m-d', strtotime($Start));
        $tanggal 			= date('Y-m-d', strtotime($End));
        // DB::select("call spinputclosing('$paket_pengadaan','$tgl_closing')");
        DB::table('vdr_blacklist')->Insert([
        	['Vendor' => $Vendor, 'Reason' => $Reason,'Start' => $tgl,'End' => $tanggal,'Evidence' => $Evidence	,'status'=> 1]
        ]);
        $msg['msg'] = 'Success Insert';

        return json_encode($msg);
  }
}
