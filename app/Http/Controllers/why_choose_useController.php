<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\why_choose_us;
use Carbon\Carbon;
use Image;

class why_choose_useController extends Controller
{
    function why_choose_usAdd(){
        return view('admin.why_choose_us.Add');
    }
   
    function why_choose_usPost(Request $data){
        $data->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
           
        ]);
        $slug = $data->title;
        $slug = str_replace(' ','_',$slug);
        $slug = str_replace(',','_',$slug);
        $slug = str_replace('/','_',$slug);
        $slug = str_replace('$','_',$slug);
        $slug = str_replace('%','_',$slug);
        $slug = str_replace('!','_',$slug);
        $slug = str_replace('@','_',$slug);
        $slug = str_replace('#','_',$slug);
        $slug = str_replace('^','_',$slug);
        $slug = str_replace('*','_',$slug);
        $slug = str_replace('&','_',$slug);
        $slugCheck = why_choose_us::where('slug', $slug)->count();
        if($slugCheck>0){
            $slug = $slug.time();
        }
     
        if($data->hasFile('image')){
            $img = $data->file('image');
            $ext = $img->getClientOriginalExtension();
            $imgName = $slug.'.'.$ext;
            Image::make($img)->resize(518,371)->save(public_path('admin/images/why_choose_us'.'/'.$imgName));
        }
        
        why_choose_us::insert([
            'title' =>$data->title ,
            'description' =>$data->description ,
            'image' =>$imgName ,
            'slug' =>$slug ,
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('why_choose_usView')->with('Msg', 'Reason is added');
    }

    function why_choose_usView(){
        $why_choose_us = why_choose_us::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.why_choose_us.View',compact('why_choose_us'));
    }

    function why_choose_usUpdate($slug){
        $why_choose_us = why_choose_us::where('slug', $slug)->first();

        return view('admin.why_choose_us.Update', compact('why_choose_us'));
    }
    function why_choose_usUpdatePost(Request $data){
    
        $data->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $why_choose_us = why_choose_us::findOrFail($data->id);
        $oldImgName = $why_choose_us->image;
        if($data->hasFile('image')){
            if(file_exists(public_path('admin/images/why_choose_us'.'/'.$oldImgName))){
                unlink(public_path('admin/images/why_choose_us'.'/'.$oldImgName));
            }
           $img = $data->file('image');
           $ext = $img->getClientOriginalExtension();
           $slug = $why_choose_us->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->save(public_path('admin/images/why_choose_us'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
    
        $why_choose_us->update([
            'title' =>$data->title ,
            'description' =>$data->description ,
            'image' =>$oldImgName ,
        ]);

        return redirect()->route('why_choose_usView')->with('Msg', 'Record updated');
     
    }

    function why_choose_usDelete($slug){
        $why_choose_us = why_choose_us::where('slug',$slug)->first();
            $oldImgName = $why_choose_us->image;
            if(file_exists(public_path('admin/images/why_choose_us'.'/'.$oldImgName))){
                unlink(public_path('admin/images/why_choose_us'.'/'.$oldImgName));
            }
            $why_choose_us->delete();
            return back()->with('deleteMsg', "File is deleted");
    }
}
