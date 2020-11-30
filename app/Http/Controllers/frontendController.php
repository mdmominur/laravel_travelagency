<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\banners;
use App\genarel_setting;
use App\services;
use App\achivement;
use App\destination;
use App\why_choose_us;
use App\tourist_exper;
use App\our_team;
use App\blog;
use App\blogComments;
use App\message;
use App\newsLetter;
use App\notification;
use Carbon\Carbon;

class frontendController extends Controller
{
    function index(){
        $banner = banners::where('id', '2')->first();
        $services = services::orderBy('created_at', 'desc')->get();
        $achivement = achivement::first();
        $destination = destination::orderBy('created_at', 'desc')->limit(6)->get();
        $PopularDestination = destination::where('popular', 'on')->orderBy('created_at', 'desc')->limit(4)->get();
        $tourist_exp = tourist_exper::orderBy('created_at', 'desc')->limit(3)->get();
        $our_team = our_team::where('mark', 'on')->orderBy('updated_at', 'desc')->limit(3)->get();
        return view('frontend.index', compact('banner', 'services', 'achivement', 'PopularDestination', 'destination', 
        'tourist_exp','our_team'));
    }

    function destination(){
        $banner = banners::where('id', '3')->first();
        $destination = destination::orderBy('created_at', 'desc')->paginate(9);
        return view('frontend/destination', compact('destination', 'banner' ));
    }

    function singleDestination($slug){
        $banner = banners::where('id', '11')->first();
        $singleDestination = destination::where('slug', $slug)->first();
        $reletedDestination = destination::where('country', 'LIKE','%'.$singleDestination->country.'%')
        ->orWhere('title', 'LIKE', '%'.$singleDestination->title.'%')
        ->orWhere('city', 'LIKE', '%'.$singleDestination->city.'%')->limit(4)->get();
        $count = $reletedDestination->count();
        return view('frontend.singleDestination', compact('banner', 'singleDestination', 'reletedDestination', 'count'));
    }

    function all_memebers(){
        $banner = banners::where('id', '14')->first();
        $our_team = our_team::orderBy('created_at', 'desc')->paginate(9);
        return view('frontend.all_memebers', compact('banner', 'our_team'));
    }

    function about(){
        $genarel_setting = genarel_setting::first();
        $why_choose_us = why_choose_us::orderBy('created_at', 'desc')->get();
        $banner = banners::where('id', '1')->first();
        return view('frontend.about', compact('banner', 'genarel_setting', 'why_choose_us'));
    }
    function contact(){
        $genarel_setting = genarel_setting::first();
        $banner = banners::where('id', '10')->first();
        return view('frontend.contact', compact('banner', 'genarel_setting'));
    }
    function blog(){
        $blog = blog::orderBy('created_at', 'desc')->paginate(9);
        $banner = banners::where('id', '9')->first();
        return view('frontend.blog', compact('banner', 'blog'));
    }
    function singleBlog($slug){
        $blog = blog::where('slug', $slug)->first();
        $id = $blog->id;
        $previous_post = [];
        $next_post = [];
        if(blog::min('id') != $id){
            $previous = blog::where('id', '<', $id)->max('id');
            $previous_post = blog::findOrFail($previous);
        }
        if(blog::max('id') != $id){
            $next = blog::where('id', '>', $id)->min('id');
            $next_post = blog::findOrFail($next);
        }
        $comments = blogComments::where('blogSlug', $slug)->orderBy('created_at', 'desc')->get();
        
        $banner = banners::where('id', '12')->first();
        return view('frontend.singleBlog', compact('banner', 'blog','previous_post','next_post','comments'));
    }
    function blogComment(Request $data){
        $data->validate([
            'name' => 'required ',
            'email' => 'required || email',
            'message' => 'required '
        ]);

        $comment_id = blogComments::insertGetId([
            'name' => $data->name,
            'email' => $data->email,
            'message' => $data->message,
            'blogSlug' => $data->blogSlug,
            'Created_at' => Carbon::now(),
        ]);



        return redirect('singleBlog/'.$data->blogSlug.'#next_prev');
        
    }

    function messagePost(Request $data){
        $data->validate([
            'first_name' => 'required || max:20',
            'last_name' => 'required || max:20',
            'email' => 'required || email || max:100',
            'message' => 'required || max:1000',
        ]);
        message::insert([
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'email' => $data->email,
            'message' => $data->message,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('msg', 'You message has been successfully sent');
    }

    function newsLetter(Request $data){
        $data->validate([
            'email' => 'required',
        ]);
        newsLetter::insert([
            'email' => $data->email,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('newslatterMsg', 'You successfully subscribed us!');
    }

    function search(Request $search_result){
        $search = $search_result->search;
        $destination = destination::where('country', 'LIKE', '%'.$search.'%')
        ->orWhere('city', 'LIKE', '%'.$search.'%')
        ->orWhere('day', 'LIKE', filter_var($search, FILTER_SANITIZE_NUMBER_INT))
        ->orWhere('price', 'LIKE', '%'.$search.'%')->paginate(9);
        $banner = banners::where('id', '13')->first();
        $counter = $destination->count();
        return view('frontend.search', compact('destination', 'banner', 'search', 'counter'));
    }
    



}
