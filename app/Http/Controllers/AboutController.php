<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;


class AboutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function update_page(){
		return view('starlight/about/update', [
			'about' => About::find(1)->get()
		]);
    }
	public function update_function(Request $request){
		if($request->file('icon') != null){
			foreach(About::where('id', 1)->get() AS $About){
				if(file_exists(public_path()."/storage/".$About->icon)){
					unlink(public_path()."/storage/".$About->icon);
				}
			}
		}
		$icon_name = $request->file('icon')->getClientOriginalName();
		$icon_save_path = $request->file('icon')->storeAs('image', $icon_name, 'public');
		About::find(1)->update([
			'name' => $request->name,
			'title' => $request->title,
			'description' => $request->description,
			'icon' => $icon_save_path,
		]);
		return back()->with("success", "about update done....");
    }
}
