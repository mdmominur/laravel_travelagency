<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tourist_exper;
use Image;
use Carbon\Carbon;

class tourist_experienceController extends Controller
{
    function tourist_experAdd(){
        return view('admin.tourist_experience.Add');
    }
    function tourist_experPost(Request $data){
        $data->validate([
            'title' => 'required',
            'description' => 'required',
            'role' => 'required',
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
        $slugCheck = tourist_exper::where('slug', $slug)->count();
        if($slugCheck>0){
            $slug = $slug.time();
        }
     
        if($data->hasFile('image')){
            $img = $data->file('image');
            $ext = $img->getClientOriginalExtension();
            $imgName = $slug.'.'.$ext;
            Image::make($img)->resize(100,100)->save(public_path('admin/images/tourist'.'/'.$imgName));
        }
        
        tourist_exper::insert([
            'title' =>$data->title ,
            'description' => $data->description ,
            'role' =>$data->role,
            'slug' =>$slug ,
            'image' =>$imgName,
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('tourist_experView')->with('Msg', 'Tourist experience is added');
    }

    function tourist_experView(){
        $experience = tourist_exper::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.tourist_experience.View',compact('experience'));
    }

    function tourist_experUpdate($slug){
        $tourist_exper = tourist_exper::where('slug', $slug)->first();

        return view('admin.tourist_experience.Update', compact('tourist_exper'));
    }
    function tourist_experUpdatePost(Request $data){
    
        $data->validate([
            'title' => 'required',
            'description' => 'required',
            'role' => 'required',
        ]);
        
        $tourist_exper = tourist_exper::findOrFail($data->id);
        $oldImgName = $tourist_exper->image;
        if($data->hasFile('image')){
            if(file_exists(public_path('admin/images/tourist'.'/'.$oldImgName))){
                unlink(public_path('admin/images/tourist'.'/'.$oldImgName));
            }
           $img = $data->file('image');
           $ext = $img->getClientOriginalExtension();
           $slug = $tourist_exper->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->save(public_path('admin/images/tourist'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
    
        $tourist_exper->update([
            'title' =>$data->title ,
            'description' => $data->description ,
            'role' =>$data->role,
            'image' =>$oldImgName,
            
        ]);

        return redirect()->route('tourist_experView')->with('Msg', 'Quote is successfully updated');
     
    }

    function tourist_experDelete($slug){
        $tourist_exper = tourist_exper::where('slug',$slug)->first();
            $oldImgName = $tourist_exper->image;
            if(file_exists(public_path('admin/images/tourist'.'/'.$oldImgName))){
                unlink(public_path('admin/images/tourist'.'/'.$oldImgName));
            }
            $tourist_exper->delete();
            return back()->with('deleteMsg', "Quote is deleted");
    }
}
