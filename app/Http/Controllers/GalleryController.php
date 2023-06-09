<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Gallery;
use IIlluminate\Support\Facades\Storage;
use Image;


class GalleryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
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
			Gallery::insert([
				"title" => $request->title,
				"category" => $request->category,
				"photo" => image_insert_function($request, 'photo'),,
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
		Gallery::find($id)->update([
			'title' => $request->title,
			"category" => $request->category,
			'photo' => image_update_function($request, Gallery::find($id)->get(), 'photo'),
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
		image_delete_function(Category::where('id', $id)->get(), 'photo');
		Gallery::find($id)->forceDelete();
		return redirect('dashboard/gallery/loop')->with('success', 'gallery delete success');
    }
}
