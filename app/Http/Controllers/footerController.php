<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\footer;

class footerController extends Controller
{
    function footer(){
        $footer = footer::first();
        return view('admin.footer', compact('footer'));
    }
    function footerUpdatePost(Request $data){
        $data->validate([
            'copyright' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'whatsapp' => 'required',
        ]);
        
        $footer = footer::findOrFail($data->id);
    
        $footer->update([
            'copyright' =>$data->copyright,
            'instagram' =>$data->instagram,
            'facebook' =>$data->facebook, 
            'twitter' =>$data->twitter, 
            'whatsapp' =>$data->whatsapp, 
        ]);

        return back()->with('Msg', 'Record updated');
     
    }
}

