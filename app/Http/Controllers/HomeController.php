<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Slider;
use App\Models\About;
use App\Models\Settings;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('klift/index', [
			"gallery" => Gallery::all(),
			"slider" => Slider::all(),
			"category" => Category::all(),
			"customer" => Customer::all(),
			"about" => About::first()->get(),
			"settings" => Settings::first()->get()
		]);
    }
	public function gallery(){
        return view('klift/gallery', [
			'gallery' => Gallery::latest()->paginate(24, ['*'], 'galleries'),
			"slider" => Slider::all(),
			"category" => Category::all(),
			"customer" => Customer::all(),
			"about" => About::first()->get(),
			"settings" => Settings::first()->get()
		]);
    }
	public function search(){
		$keyword = $_POST['keyword'];
		return view('klift/gallery', [
			"gallery" => Gallery::where("title", "like", "%$keyword%")->paginate(24, ['*'], 'galleries'),
			"slider" => Slider::all(),
			"category" => Category::all(),
			"settings" => Settings::first()->get()
		]);
	}
	public function category($id){
		return view('klift/gallery', [
			"gallery" => Gallery::where("category", $id)->paginate(24, ['*'], 'galleries'),
			"slider" => Slider::all(),
			"category" => Category::all(),
			"settings" => Settings::first()->get()
		]);
	}
}
