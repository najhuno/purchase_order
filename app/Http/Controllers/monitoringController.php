<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class monitoringController extends Controller
{
	public function monitor() {
	 $monitoring['monitoring'] = DB::table('vendor_monitoring')->get();
     $monitoring['title'] = 'vendor_monitoring';

		return view("monitoring",$monitoring);
	}
	public function delete_monitor(Request $request){
    	$vcategory = $request->get('id_monitor');
		$datamonitor = DB::select("call spmonitoring('".$vcategory."')");

		 $data ['content'] = $datamonitor;
        $msg['msg'] = 'Success Delete';
        return json_encode($data);
	}
	public function edit_monitor(Request $request){
		$id_monitoring = $request->get('id_monitoring');
		$janis_anggaran = $request->get('janis_anggaran');
		


		$updateArr = array('id_monitoring' => $id_monitoring,'janis_anggaran' => $janis_anggaran);

		DB::table('vendor_monitoring')
			->where('id_monitoring',$id_monitoring)
			->update($updateArr);
		$msg['msg'] = 'Success Update';


		return json_encode($msg);
	}
	public function filter_toring(Request $request){
		
		$toring = $request->get('search_toring');
		

       $toring = DB::select("call spcaritoring('".$toring."')");
		$data ['content'] = $toring;

		return json_encode($data);
	}
}