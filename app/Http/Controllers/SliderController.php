<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Slider;
use auth;
use Image;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function index(){
		return view('starlight/index');
    }
	public function insert_page(){
		return view('starlight/slider/insert');
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required|string|max:100', 
					'title' => 'required|max:225',
					'icon' => 'file|mimes:jpg,bmp,png'
				],
			);
			Slider::insert([
				"name" => $request->name,
				"title" => $request->title,
				"icon" => image_insert_function($request, 'icon'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/slider/loop')->with('success', 'slider add success');
		}else{
			return redirect('home');
		}
    }
	public function loop(){
		return view('starlight/slider/loop', [
			'slider' => Slider::latest()->get()
		]);
    }
	public function update_page($id){
		return view('starlight/slider/update', [
			'slider' => Slider::where('id', $id)->get()
		]);
    }
	public function update_function(Request $request, $id){
		Slider::find($id)->update([
			'name' => $request->name,
			'title' => $request->title,
			'icon' => image_update_function($request, Category::find($id)->get(), 'icon'),,
		]);
		return back()->with("alert", "slider update done....");
    }
	public function search_function(){
		/*$keyword = $_GET['keyword']
		return view('search', [
			"Slider" = Slider::where("name", "like", "%$keyword%")->get();
		]);*/
	}
	public function remove_function($id){
		image_delete_function(Category::where('id', $id)->get(), 'icon');
		Slider::find($id)->forceDelete();
		return redirect('dashboard/slider/loop')->with('success', 'slider delete success');
    }
}
