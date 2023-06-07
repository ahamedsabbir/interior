<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use auth;


class SettingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
	public function update_page(){
		return view('starlight/settings/update', [
			'settings' => Settings::find(1)->get()
		]);
    }
	public function update_function(Request $request){
		Settings::find(1)->update([
			'name' => $request->name,
			'icon' => settingsUpload($request, Settings::where('id', 1)->get(), 'icon'),
			'add_one' => settingsUpload($request, Settings::where('id', 1)->get(), 'add_one'),
			'add_two' => settingsUpload($request, Settings::where('id', 1)->get(), 'add_two'),
			'add_three' => settingsUpload($request, Settings::where('id', 1)->get(), 'add_three'),
			'add_four' => settingsUpload($request, Settings::where('id', 1)->get(), 'add_four'),
			'address' => $request->address,
			'email' => $request->email,
			'mobile' => $request->mobile,
			'twitter' => $request->twitter,
			'instagram' => $request->instagram,
			'facebook' => $request->facebook,
			'copyright' => $request->copyright,
		]);
		return back()->with("success", "Settings update done....");
    }
}
