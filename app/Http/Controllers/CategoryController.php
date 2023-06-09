<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\Category;
use IIlluminate\Support\Facades\Storage;
use auth;
use Image;

class CategoryController extends Controller
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
		return view('starlight/category/insert');
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required|unique:categories,name|string|max:225', 
					'title' => 'required|unique:categories,title',
					'icon' => 'file|mimes:jpg,bmp,png'
				],
			);
			Category::insert([
				"name" => $request->name,
				"title" => $request->title,
				"icon" => image_insert_function($request, 'icon'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/category/loop')->with('success', 'category add success');
		}else{
			return redirect('home');
		}
    }
	public function loop(){
		return view('starlight/category/loop', [
			'category' => Category::latest()->get()
		]);
    }
	public function update_page($id){
		return view('starlight/category/update', [
			'category' => Category::where('id', $id)->get()
		]);
    }
	public function update_function(Request $request, $id){
		Category::find($id)->update([
			'name' => $request->name,
			'title' => $request->title,
			'icon' => image_update_function($request, Category::find($id)->get(), 'icon'),
		]);
		return back()->with("alert", "category update done....");
    }
	public function search_function(){
		/*$keyword = $_GET['keyword']
		return view('search', [
			"Category" = Category::where("name", "like", "%$keyword%")->get();
		]);*/
	}
	public function remove_function($id){
		image_delete_function(Category::where('id', $id)->get(), 'icon');
		Category::find($id)->forceDelete();
		return redirect('dashboard/category/loop')->with('success', 'category delete success');
    }
}
