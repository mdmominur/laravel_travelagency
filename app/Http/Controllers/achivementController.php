<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\achivement;
use Carbon\Carbon;
use Image;

class achivementController extends Controller
{
    function achivement(){
        $achivement = achivement::first();
        return view('admin.achivement', compact('achivement'));
    }
    function achivementUpdatePost(Request $data){
        $data->validate([
            'title1' => 'required',
            'title2' => 'required',
            'description' => 'required',
            'opt1' => 'required',
            'opt1_value' => 'required',
            'opt2' => 'required',
            'opt2_value' => 'required',
            'opt3' => 'required',
            'opt3_value' => 'required',
        ]);
        
        $achivement = achivement::findOrFail($data->id);
        $oldImgName = $achivement->image;
        if($data->hasFile('image')){
            if(file_exists(public_path('admin/images'.'/'.$oldImgName))){
                unlink(public_path('admin/images'.'/'.$oldImgName));
            }
           $img = $data->file('image');
           $ext = $img->getClientOriginalExtension();
           $slug = $achivement->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->save(public_path('admin/images'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
    
        $achivement->update([
            'title1' => $data->title1,
            'title2' => $data->title2,
            'description' => $data->description,
            'opt1' => $data->opt1,
            'opt1_value' => $data->opt1_value,
            'opt2' => $data->opt2,
            'opt2_value' => $data->opt2_value,
            'opt3' => $data->opt3,
            'opt3_value' => $data->opt3_value,
            'image' => $oldImgName,
        ]);

        return redirect()->route('achivement')->with('Msg', 'Record updated');
     
    }
}