<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class userController extends Controller
{
    function user_profile(){
        $my_profile = auth()->user();
        return view('admin.user.profile', compact('my_profile'));
    }
    function user_profile_update(Request $data){
        $data->validate([
            'name' => 'required',
        ]);
        
        $my_profile = auth()->user();
        $oldImgName = $my_profile->image;
        if($data->hasFile('image')){
            if($oldImgName != 'avatar.png'){
                if(file_exists(public_path('admin/images/user'.'/'.$oldImgName))){
                    unlink(public_path('admin/images/user'.'/'.$oldImgName));
                }
            }
            if($my_profile->slug == null){
                 $slug = $data->name;
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
                 $slugCheck = User::where('slug', $slug)->count();
                 if($slugCheck>0){
                     $slug = $slug.time();
                 }
                 $my_profile->update([
                     'slug' => $slug,
                 ]);
            }
           $img = $data->file('image');
           $ext = $img->getClientOriginalExtension();
           $slug = $my_profile->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->resize(200, 200)->save(public_path('admin/images/user'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
    
        $my_profile->update([
           'name' =>$data->name,
           'image' =>$oldImgName,
        ]);

        return back()->with('Msg', 'Record updated');
     
    }
    function userView(){
        $main_user = Auth::user();
        $users = User::orderBy('created_at', 'desc')->paginate(8);
        return view('admin.user.viewUser', compact('users', 'main_user'));
    }
    function userUpdate(){
        $users = User::where('admin_confirmation', 0)->orderBy('created_at', 'desc')->paginate(8);
        return view('admin.user.userRequest', compact('users'));
    }
    function userUpdatePost($id){
        $users = User::findOrFail($id);
        $users->update([
            'admin_confirmation' => '1',
        ]);
        return back()->with("Msg", "User is successfully added");
    }
    function userDelete($id){
        $users = User::findOrFail($id);
        $users->delete();
        return back()->with('Msg', 'Successfully user is deleted');
    }
}
