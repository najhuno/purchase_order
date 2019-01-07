<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

use DB;

class categoriController extends Controller
{
	public function showElement(){

		$data['data'] = DB::table('ctl_category')->get();
		$data['title'] = 'ctl_category';

		return view('categori',$data);
	}
	public function input_category(Request $request){
		
		
        $Nama_category = $request->get('Nama_category');
        
//dd($Nama_category);
        DB::select("call spInsertCategory('$Nama_category')");

        $msg['msg'] = 'Success Insert';

        return json_encode($msg);
  }

	public function edit_category(Request $request){
		
		$id_category	= $request->get('id_category');
		$Nama_category	= $request->get('Nama_category');
		
		


		$updateArr = array('id_category' => $id_category,'Nama_category' => $Nama_category);
//dd($updateArr);
		DB::table('ctl_category')
			->where('id_category',$id_category)
			->update($updateArr);
		$msg['msg'] = 'Success Update';


		return json_encode($msg);
	}
	public function delete_category(Request $request){
    	$Nama_category = $request->get('id_category');
        

    	$datacategory = DB::select("call spdeletecategory('".$Nama_category."')");
    
     	$data ['content'] = $datacategory;
        	$msg['msg'] = 'Success Delete';
        	return json_encode($data);
  	}
}