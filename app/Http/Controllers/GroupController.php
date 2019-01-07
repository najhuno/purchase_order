<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\group;

use DB;

class GroupController extends Controller
{
	public function group(){
		$data['data'] = DB::table('group')->get();
		$data['title'] = 'group';

		return view('Group', $data);
		//return view('Group',compact(['data']));
	}

	public function insert_group(Request $request){
		//dd($request);
	$this->validate($request,[
		'grname'	=> 'required',
		'grdes'		=> 'required'
	]);

	$insert = new group();
	$insert->nama_group = $request['grname'];
	$insert->des_group =  $request['grdes'];
	
	//dd($insert);
		$insert->save();
		
		return redirect()->to('Group')->with('success','Data Added');
		
	}
	public function edit_group(Request $request){
		$id_group 	= $request->get('group_id');
		$nama_group = $request->get('nama_group');
		$des_group 	= $request->get('des_group');
		$updateArr = array('id_group' => $id_group,'nama_group' => $nama_group,'des_group' => $des_group);
		//dd($updateArr);
		DB::table('group')
			->where('id_group',$id_group)
			->update($updateArr);
		$msg['msg'] = 'Success Update';

		return json_encode($msg);
	}
	public function delete_group(Request $request){
    	$grname = $request->get('grname');
    	$grdes 	= $request->get('grdes');
        

    	$datagroup = DB::select("call spdeletegroup('".$grname."', '".$grdes."')");
    
     	$data ['content'] = $datagroup;
        	$msg['msg'] = 'Success Delete';
        	return json_encode($data);
  	}
  	public function filter_group(Request $request){
    
    $grname = $request->get('search_group');
    

    $group = DB::select("call sppencarian('".$grname."')");
    $data ['content'] = $group;

    return json_encode($data);
  }

}