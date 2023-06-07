<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Slider;
use auth;


class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
			$icon_name = $request->file('icon')->getClientOriginalName();
			$icon_save_path = $request->file('icon')->storeAs('image', $icon_name, 'public');
			Slider::insert([
				"name" => $request->name,
				"title" => $request->title,
				"icon" => $icon_save_path,
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
		if($request->file('icon') != null){
			foreach(Slider::where('id', $id)->get() AS $slider){
				if(file_exists(public_path()."/storage/".$slider->icon)){
					unlink(public_path()."/storage/".$slider->icon);
				}
			}
		}
		$icon_name = $request->file('icon')->getClientOriginalName();
		$icon_save_path = $request->file('icon')->storeAs('image', $icon_name, 'public');
		Slider::find($id)->update([
			'name' => $request->name,
			'title' => $request->title,
			'icon' => $icon_save_path,
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
		foreach(Slider::where('id', $id)->get() AS $slider){
			if(file_exists(public_path()."/storage/".$slider->icon)){
				unlink(public_path()."/storage/".$slider->icon);
			}
		}
		Slider::find($id)->forceDelete();
		return redirect('dashboard/slider/loop')->with('success', 'slider delete success');
    }
}
