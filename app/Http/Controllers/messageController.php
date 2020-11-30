<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class messageController extends Controller
{
    function viewMessageOnPage($id){
        $message = message::findOrFail($id);
        $message->update(['status' => 1]);
        return view('admin.message.viewMessageOnPage', compact('message'));
    }

    function allMessage(){
        $message = message::orderBy('created_at', 'desc')->paginate(8);
        $count = message::where('status', 0)->count();
        return view('admin.message.allMessage', compact('message', 'count'));
    }

    function messageDelete($id){
        $message = message::findOrFail($id);
        $message->delete();
        return redirect()->route('allMessage')->with('msg', 'message has been deleted');
    }
    function markUnread($id){
        $message = message::findOrFail($id);
        $message->update(['status' => 0]);
        return redirect()->route('allMessage');
    }

    function allMessageClear(){
        $message = message::get();
        foreach($message as $item){
            $item->update(['status' => 1]);
        }
        return back();
    }
}
