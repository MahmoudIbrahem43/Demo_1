<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class SettingController extends Controller
{
 

    public function createForm(){
        return view('settings.file_upload');
      }
    
      public function fileUpload(Request $req){
            $req->validate([
            'file' => 'required|mimes:csv,jpg,svg,txt,xlx,xls,pdf|max:2048'
            ]);
    
            $setting = new Setting;
    
            if($req->file()) {
                $name = time().'_'.$req->file->getClientOriginalName();
                $logo = $req->file('file')->storeAs('uploads', $name, 'public');
    
                $setting->name = time().'_'.$req->file->getClientOriginalName();
                $setting->logo = '/storage/' . $logo;
                $setting->save();
    
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $name);
            }
       }
    
    }