<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\services;
use Illuminate\Http\Request;
use Image;

class serviceController extends Controller
{
    function serviceAdd(){
        return view('admin.service.serviceAdd');
    }
    function servicePost(Request $data){
        $data->validate([
            'title' => 'required',
            'service_pra' => 'required | max:168',
            'serviceImg' => 'required',
        ]);
        $slug = $data->title;
        $slug = str_replace(' ','_',$slug);
        $slugCheck = services::where('slug', $slug)->count();
        if($slugCheck>0){
            $slug = $slug.time();
        }
        if($data->hasFile('serviceImg')){
            $img = $data->file('serviceImg');
            $ext = $img->getClientOriginalExtension();
            $imgName = $slug.'.'.$ext;
            Image::make($img)->resize(65,65)->save(public_path('admin/images/services'.'/'.$imgName));
        }
       
        
        services::insert([
            'title' => $data->title,
            'service_pra' => $data->service_pra,
            'slug' => $slug,
            'serviceImg' => $imgName,
            'created_at' => Carbon::now(),
        ]);
        
        return back()->with('Msg', 'Service is successfully added');
    }

    function serviceView(){
        $services = services::orderBy('id', 'asc')->paginate(8);
        return view('admin.service.serviceView',compact('services'));
    }

    function serviceUpdate($id){
        $singleService = services::findOrFail($id);
        return view('admin.service.serviceUpdate', compact('singleService'));
    }
    function serviceUpdatePost(Request $data){
        
        $data->validate([
            'title' => 'required',
            'service_pra' => 'required | max:168',
        
        ]);
        
        $singleService = services::findOrFail($data->id);
        $oldImgName = $singleService->serviceImg;
        if($data->hasFile('serviceImg')){
            if(file_exists(public_path('admin/images/services'.'/'.$oldImgName))){
                unlink(public_path('admin/images/services'.'/'.$oldImgName));
            }
           $img = $data->file('serviceImg');
           $ext = $img->getClientOriginalExtension();
           $slug = $singleService->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->resize(65,65)->save(public_path('admin/images/services'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
        $singleService->update([
            'title' => $data->title,
            'service_pra' => $data->service_pra,
            'serviceImg' => $oldImgName,
        ]);

        return redirect()->route('serviceView')->with('Msg', 'Service is successfully updated');
     
    }

    function serviceDelete($id){
        $singleService = services::findOrFail($id);
            $oldImgName = $singleService->serviceImg;
            if(file_exists(public_path('admin/images/services'.'/'.$oldImgName))){
                unlink(public_path('admin/images/services'.'/'.$oldImgName));
            }
            $singleService->delete();
            return back()->with('deleteMsg', "Your service is successfully deleted");
    }
}
