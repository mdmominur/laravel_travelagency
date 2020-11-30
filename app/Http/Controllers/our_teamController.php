<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\our_team;
use Carbon\Carbon;
use Image;

class our_teamController extends Controller
{
    function our_teamAdd(){
        return view('admin.our_team.Add');
    }
   
    function our_teamPost(Request $data){
        $data->validate([
            'title' => 'required',
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
        $slugCheck = our_team::where('slug', $slug)->count();
        if($slugCheck>0){
            $slug = $slug.time();
        }
     
        if($data->hasFile('image')){
            $img = $data->file('image');
            $ext = $img->getClientOriginalExtension();
            $imgName = $slug.'.'.$ext;
            Image::make($img)->resize(414,354)->save(public_path('admin/images/our_team'.'/'.$imgName));
        }
        
        our_team::insert([
            'title' =>$data->title ,
            'role' => $data->role ,
            'image' =>$imgName,
            'facebook' =>$data->facebook ,
            'twitter' =>$data->twitter,
            'instagram' =>$data->instagram,
            'slug' =>$slug,
            'mark' =>$data->mark,
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('our_teamView')->with('Msg', 'Member is added');
    }

    function our_teamView(){
        $our_team = our_team::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.our_team.View',compact('our_team'));
    }
    function home_item(){
        $our_team = our_team::where('mark', 'on')->orderBy('updated_at', 'desc')->paginate(4);
        return view('admin.our_team.home_item', compact('our_team'));
    }
    function home_item_remove($slug){
       $our_team = our_team::where('slug', $slug)->first();
       $our_team->update([
           'mark' => null,
       ]);
       return back()->with('Msg', 'Member is removed from homepage');
    }

    function our_teamUpdate($slug){
        $our_team = our_team::where('slug', $slug)->first();

        return view('admin.our_team.Update', compact('our_team'));
    }
    function our_teamUpdatePost(Request $data){
    
        $data->validate([
            'title' => 'required',
            'role' => 'required',
        ]);
        
        $our_team = our_team::findOrFail($data->id);
        $oldImgName = $our_team->image;
        if($data->hasFile('image')){
            if(file_exists(public_path('admin/images/our_team'.'/'.$oldImgName))){
                unlink(public_path('admin/images/our_team'.'/'.$oldImgName));
            }
           $img = $data->file('image');
           $ext = $img->getClientOriginalExtension();
           $slug = $our_team->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->resize(414,354)->save(public_path('admin/images/our_team'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
    
        $our_team->update([
            'title' =>$data->title ,
            'role' => $data->role ,
            'image' =>$oldImgName,
            'facebook' =>$data->facebook ,
            'twitter' =>$data->twitter,
            'instagram' =>$data->instagram,
            'mark' =>$data->mark,
        ]);

        return redirect()->route('our_teamView')->with('Msg', 'Record updated');
     
    }

    function our_teamDelete($slug){
        $our_team = our_team::where('slug',$slug)->first();
            $oldImgName = $our_team->image;
            if(file_exists(public_path('admin/images/our_team'.'/'.$oldImgName))){
                unlink(public_path('admin/images/our_team'.'/'.$oldImgName));
            }
            $our_team->delete();
            return back()->with('deleteMsg', "Quote is deleted");
    }
}
