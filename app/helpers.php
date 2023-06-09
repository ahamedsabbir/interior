<?php
function naturalDate($date){
	$date1 = strtr($date, '/', '-');
	return date('d/m/Y', strtotime($date1));
}
function image_insert_function($request, $data){
	$file_temp = $request->file($data);
	$file_name = time().rand(99999, 10000).".".$file_temp->getClientOriginalExtension();
	Image::make($file_temp)->save(base_path("public/klift/uploads/".$file_name));
	return $file_name;
}
function image_update_function($request, $data, $name){
	if($request->file($name) != null){
		foreach($data AS $data_value){
			if(file_exists(public_path()."/klift/uploads/".$data_value->$name)){
				unlink(public_path()."/klift/uploads/".$data_value->$name);
			}
		}
		$file_temp = $request->file($name);
		$file_name = time().rand(99999, 10000).".".$file_temp->getClientOriginalExtension();
		Image::make($file_temp)->save(base_path("public/klift/uploads/".$file_name));
	}else{
		foreach($data AS $data_value){
			$file_name = $data_value->$name;
		}
	}
	return $file_name;
}
function image_delete_function($data, $name){
	foreach($data AS $data_value){
		if(file_exists(public_path()."/klift/uploads/".$data_value->$name)){
			unlink(public_path()."/klift/uploads/".$data_value->$name);
		}
	}
}