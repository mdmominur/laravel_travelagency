<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\newsLetter;
use App\Mail\newsLetterMail;

class newsLatterController extends Controller
{
    function subscriber(){
        $subscriber = newsLetter::orderBy('created_at', 'desc')->paginate(8);
        return view('admin.newsLetter',compact('subscriber'));
    }

    function newsLetterPost(){
        return $data->message;
    }

    function subscriberDelete($id){
        newsLetter::findOrFail($id)->delete();
        return back()->with('deleteMsg', 'Subscriber is deleted');
    }
    function sendNewsLetter(Request $data){
        $message = ['msg' => $data->message];
        $email = newsLetter::all();
        foreach($email as $item){
            Mail::to($item->email)->send(new newsLetterMail($message));
        }
        return back()->with('msg', 'Mail has been sent to every subscriber');
    }
}
