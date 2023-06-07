<?php
function naturalDate($date){
	$date1 = strtr($date, '/', '-');
	return date('d/m/Y', strtotime($date1));
}
function settingsUpload($request, $data, $row){
   if($request->file($row) != null){
		foreach($data AS $data_value){
			if(file_exists(public_path()."/storage/".$data_value->$row)){
				unlink(public_path()."/storage/".$data_value->$row);
			}
		}
		$unique = rand(9999, 0000);
		$add_one = $request->file($row)->getClientOriginalName();
		$add_one_save_path = $request->file($row)->storeAs('image', $unique.$add_one, 'public');
	}else{
		foreach($data AS $data_value){
			$add_one_save_path = $data_value->$row;
		}
	}
	return $add_one_save_path;
}