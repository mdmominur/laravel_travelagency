<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\destination;
use Image;
use Carbon\Carbon;

class destinationController extends Controller
{
    function destinationAdd(){
        return view('admin.destination.destinationAdd');
    }
    function destinationPost(Request $data){

        $data->validate([
            'title' => 'required',
            'price' => 'required ',
            'day' => 'required || numeric',
            'country' => 'required',
            'city' => 'required',
            'description' => 'required || max:550',
            'image' => 'required',
            'tour_details' => 'required',
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
        $slugCheck = destination::where('slug', $slug)->count();
        if($slugCheck>0){
            
            $slug = $slug.time();
        }
     
        if($data->hasFile('image')){
            $img = $data->file('image');
            $ext = $img->getClientOriginalExtension();
            $imgName = $slug.'.'.$ext;
            Image::make($img)->resize(540,628)->save(public_path('admin/images/destination'.'/'.$imgName));
        }
        
       destination::insert([
            'title' => $data->title,
            'slug' => $slug,
            'price' => $data->price ,
            'day' => $data->day ,
            'country' => $data->country ,
            'city' => $data->city ,
            'description' => $data->description ,
            'popular' => $data->popular ,
            'image' => $imgName ,
            'tour_details' => $data->tour_details ,
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('destinationView')->with('Msg', 'Destination is successfully Added');
    }

    function destinationView(){
        $destinations = destination::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.destination.destinationView',compact('destinations'));
    }
    function popularDestination(){
        $destinations = destination::where('popular','on')->orderBy('created_at', 'desc')->paginate(4);
        return view('admin.destination.popularDestination',compact('destinations'));
    }

    function destinationUpdate($slug){
        $destinations = destination::where('slug', $slug)->first();
        return view('admin.destination.destinationUpdate', compact('destinations'));
    }
    function destinationUpdatePost(Request $data){
        
        $data->validate([
            'title' => 'required',
            'price' => 'required ',
            'day' => 'required || numeric',
            'country' => 'required',
            'city' => 'required',
            'description' => 'required || max:550',
            'tour_details' => 'required',
        
        ]);
        
        $singleDestination = destination::findOrFail($data->id);
        $oldImgName = $singleDestination->image;
        if($data->hasFile('image')){
            if(file_exists(public_path('admin/images/destination'.'/'.$oldImgName))){
                unlink(public_path('admin/images/destination'.'/'.$oldImgName));
            }
           $img = $data->file('image');
           $ext = $img->getClientOriginalExtension();
           $slug = $singleDestination->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->resize(540,628)->save(public_path('admin/images/destination'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
    
        $singleDestination->update([
            'title' => $data->title,
            'price' => $data->price,
            'day' => $data->day,
            'country' => $data->country,
            'city' => $data->city,
            'description' => $data->description,
            'popular' => $data->popular ,
            'image' => $oldImgName,
            'tour_details' => $data->tour_details,
            
        ]);

        return redirect()->route('destinationView')->with('Msg', 'Destination is successfully updated');
     
    }

    function destinationDelete($id){
        $singleDestination = destination::findOrFail($id);
            $oldImgName = $singleDestination->image;
            if(file_exists(public_path('admin/images/destination'.'/'.$oldImgName))){
                unlink(public_path('admin/images/destination'.'/'.$oldImgName));
            }
            $singleDestination->delete();
            return back()->with('deleteMsg', "Your Destinaion is successfully deleted");
    }
    function popularDestinationRemove($id){
        $singleDestination = destination::findOrFail($id);
        $singleDestination->update([
            'popular' => null,
        ]);
        return back()->with('Msg', 'Destination is removed from Popular list');
    }
}
