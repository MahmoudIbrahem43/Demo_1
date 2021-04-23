<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class SettingController extends Controller
{


    public function createForm()
    {
        return view('settings.file_upload');
    }

    public function fileUpload(Request $req)
    {
        $req->validate([
            'name' => 'required',
            // 'logo' => 'required|mimes:csv,jpg,svg,txt,png,gif,jpeg,xlx,xls,pdf|max:2048'
        ]);

          $setting=Setting::first();
          if(!$setting){
            $setting = new Setting;
          }
        $name = $req->name;
        if (request('logo')) {
            $file_extension = request('logo')->getClientOriginalExtension();
            $file_name = "logo" . time() . '.' . $file_extension;
            $path = 'uploaded/';
            $req->logo->move($path, $file_name);
            $setting->logo = $file_name;
        }
        $setting->name = $name;
        $setting->save();
        return redirect()->back()
        ->with('success', 'File has been uploaded.');
    }


     public static function showSetting()
    {
        $settings = Setting::all()->first();
        return $settings;
    }
}
