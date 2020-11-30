<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\pages;
use App\banners;
use Image;

class bannerController extends Controller
{
    function addBanner(){
        $pages = pages::orderBy('id', 'asc')->get();
        return view('admin.banner.addBanner', compact('pages'));
    }
    function bannerPost(Request $data){
        $data->validate([
            'title' => 'required',
            'bannerPage' => 'required',
            'bannerImg' => 'required',
        ]);

        $img = $data->file('bannerImg');
        $ext = $img->getClientOriginalExtension();
        $page = pages::where('id',$data->bannerPage)->first();
        $imgName = $page->page_name.'.'.$ext;
        Image::make($img)->resize(1920,1080)->save(public_path('admin/images/banner'.'/'.$imgName));
        
        banners::insert([
            'title' => $data->title,
            'caption' => $data->caption,
            'bannerPage' => $data->bannerPage,
            'bannerImg' => $imgName,
            'created_at' => Carbon::now(),
        ]);
        
        return back()->with('Msg', 'Banner is successfully added');
    }

    function bannerView(){
        $banners = banners::orderBy('id', 'asc')->get();
        return view('admin.banner.bannerView',compact('banners'));
    }

    function bannerUpdate($id){
        $singleBanner = banners::findOrFail($id);
        return view('admin.banner.bannerUpdate', compact('singleBanner'));
    }
    function bannerUpdatePost(Request $data){
        $data->validate([
            'title' => 'required',
        ]);
        $oldImgName = banners::findOrFail($data->id)->bannerImg;
        if($data->hasFile('bannerImg')){
            if(file_exists(public_path('admin/images/banner'.'/'.$oldImgName))){
                unlink(public_path('admin/images/banner'.'/'.$oldImgName));
            }
           $img = $data->file('bannerImg');
           $ext = $img->getClientOriginalExtension();
           $page = banners::findOrFail($data->id);
           $imgName = $page->getPage->page_name.'.'.$ext;
           Image::make($img)->resize(1920,1080)->save(public_path('admin/images/banner'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
        banners::findOrFail($data->id)->update([
            'title' => $data->title,
            'caption' => $data->caption,
            'bannerImg' => $oldImgName,
        ]);

        return redirect()->route('bannerView')->with('Msg', 'Banner is successfully updated');
     
    }
}
