<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Gallery;
use IIlluminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
	public function insert_page(){
		return view('starlight/gallery/insert', [
			'category' => Category::all()
		]);
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'title' => 'required',
					'category' => 'required',
					'photo' => 'file|mimes:jpg,bmp,png'
				],
			);
			$unique = rand(9999, 0000);
			$photo_name = $request->file('photo')->getClientOriginalName();
			$photo_save_path = $request->file('photo')->storeAs('image', $unique.$photo_name, 'public');
			Gallery::insert([
				"title" => $request->title,
				"category" => $request->category,
				"photo" => $photo_save_path,
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/gallery/loop')->with('success', 'gallery add success');
		}else{
			return redirect('home');
		}
    }
	public function loop(){
		return view('starlight/gallery/loop', [
			'gallery' => Gallery::latest()->get()
		]);
    }
	public function update_page($id){
		return view('starlight/gallery/update', [
			'category' => Category::all(),
			'gallery' => Gallery::where('id', $id)->get()
		]);
    }
	public function update_function(Request $request, $id){
		if($request->file('photo') != null){
			foreach(Gallery::where('id', $id)->get() AS $gallery){
				if(file_exists(public_path()."/storage/".$gallery->photo)){
					unlink(public_path()."/storage/".$gallery->photo);
				}
			}
			$unique = rand(9999, 0000);
			$photo_name = $request->file('photo')->getClientOriginalName();
			$photo_save_path = $request->file('photo')->storeAs('image', $unique.$photo_name, 'public');
		}else{
			foreach(Gallery::where('id', $id)->get() AS $gallery){
				$photo_save_path = $gallery->photo;
			}
		}
		Gallery::find($id)->update([
			'title' => $request->title,
			"category" => $request->category,
			'photo' => $photo_save_path,
		]);
		return back()->with("alert", "gallery update done....");
    }
	public function search_function(){
		/*$keyword = $_GET['keyword']
		return view('search', [
			"Gallery" = Gallery::where("name", "like", "%$keyword%")->get();
		]);*/
	}
	public function remove_function($id){
		foreach(Gallery::where('id', $id)->get() AS $gallery){
			if(file_exists(public_path()."/storage/".$gallery->photo)){
				unlink(public_path()."/storage/".$gallery->photo);
			}
		}
		Gallery::find($id)->forceDelete();
		return redirect('dashboard/gallery/loop')->with('success', 'gallery delete success');
    }
}
