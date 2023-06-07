<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Customer;
use IIlluminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
	public function insert_page(){
		return view('starlight/customer/insert');
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required|unique:customers,name|string|max:225', 
					'title' => 'required',
					'description' => 'required',
					'photo' => 'file|mimes:jpg,bmp,png'
				],
			);
			$photo_name = $request->file('photo')->getClientOriginalName();
			$photo_save_path = $request->file('photo')->storeAs('image', $photo_name, 'public');
			Customer::insert([
				"name" => $request->name,
				"title" => $request->title,
				"description" => $request->description,
				"photo" => $photo_save_path,
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/customer/loop')->with('success', 'customer add success');
		}else{
			return redirect('home');
		}
    }
	public function loop(){
		return view('starlight/customer/loop', [
			'customer' => Customer::latest()->get()
		]);
    }
	public function update_page($id){
		return view('starlight/customer/update', [
			'customer' => Customer::where('id', $id)->get()
		]);
    }
	public function update_function(Request $request, $id){
		if($request->file('photo') != null){
			foreach(Customer::where('id', $id)->get() AS $customer){
				if(file_exists(public_path()."/storage/".$customer->photo)){
					unlink(public_path()."/storage/".$customer->photo);
				}
			}
			$photo_name = $request->file('photo')->getClientOriginalName();
			$photo_save_path = $request->file('photo')->storeAs('image', $photo_name, 'public');
		}else{
			foreach(Customer::where('id', $id)->get() AS $customer){
				$photo_save_path = $customer->photo;
			}
		}
		Customer::find($id)->update([
			'name' => $request->name,
			'title' => $request->title,
			'description' => $request->description,
			'photo' => $photo_save_path,
		]);
		return back()->with("alert", "customer update done....");
    }
	public function search_function(){
		/*$keyword = $_GET['keyword']
		return view('search', [
			"Customer" = Customer::where("name", "like", "%$keyword%")->get();
		]);*/
	}
	public function remove_function($id){
		foreach(Customer::where('id', $id)->get() AS $customer){
			if(file_exists(public_path()."/storage/".$customer->photo)){
				unlink(public_path()."/storage/".$customer->photo);
			}
		}
		Customer::find($id)->forceDelete();
		return redirect('dashboard/customer/loop')->with('success', 'customer delete success');
    }
}
