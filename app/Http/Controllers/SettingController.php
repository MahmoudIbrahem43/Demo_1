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
        // if ($req->file()) {

        //     $logo = time() . '_' . $req->file->getClientOriginalName();
        //     $logo = $req->file('file')->storeAs('uploads', $logo, 'public');


        //     $setting->name = $name;
        //     $setting->logo = 'public/imgs/' . $logo;
        //     $setting->save();

        //     return back()
        //         ->with('success', 'File has been uploaded.')
        //         ->with('file', $logo);
        // }


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
