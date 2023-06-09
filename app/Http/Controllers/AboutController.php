<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Image;

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
		About::find(1)->update([
			'name' => $request->name,
			'title' => $request->title,
			'description' => $request->description,
			'icon' => image_update_function($request, About::find(1)->get(), 'icon'),
		]);
		return back()->with("success", "about update done....");
    }
}
