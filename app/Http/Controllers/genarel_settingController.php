<?php

namespace App\Http\Controllers;
use App\genarel_setting;
use App\notification;
use Image;
use Auth;

use Illuminate\Http\Request;

class genarel_settingController extends Controller
{
    function genarel_setting(){
        $genarel_setting = genarel_setting::first();
        return view('admin.genarel_setting', compact('genarel_setting'));
    }
    function genarel_settingUpdatePost(Request $data){
        $data->validate([
            'site_title' => 'required',
            'title1' => 'required',
            'title2' => 'required',
            'description' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        
        $genarel_setting = genarel_setting::findOrFail($data->id);
        $oldImgName2 = $genarel_setting->logo;
        $oldImgName = $genarel_setting->image;
        if($data->hasFile('logo')){
            if(file_exists(public_path('admin/images'.'/'.$oldImgName2))){
                unlink(public_path('admin/images'.'/'.$oldImgName2));
            }
           $img = $data->file('logo');
           $ext = $img->getClientOriginalExtension();
           $logo_slug = $genarel_setting->logo_slug;
           $imgName2 = $logo_slug.'.'.$ext;
           Image::make($img)->save(public_path('admin/images'.'/'.$imgName2));
           $oldImgName2 =  $imgName2; 
        }
        if($data->hasFile('image')){
            if(file_exists(public_path('admin/images'.'/'.$oldImgName))){
                unlink(public_path('admin/images'.'/'.$oldImgName));
            }
           $img = $data->file('image');
           $ext = $img->getClientOriginalExtension();
           $slug = $genarel_setting->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->save(public_path('admin/images'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
    
        $genarel_setting->update([
           'site_title' => $data->site_title,
           'logo' => $oldImgName2,
           'title1' => $data->title1,
           'title2' => $data->title2,
           'description' => $data->description,
           'image' => $oldImgName,
           'address' => $data->address,
           'email' => $data->email,
           'phone' => $data->phone,
        ]);

        return redirect()->route('genarel_setting')->with('Msg', 'Record updated');
     
    }
}
