<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\blogComments;
use Image;
use Carbon\Carbon;
use Auth;

class blogController extends Controller
{
    function blogAdd(){
        return view('admin.blog.Add');
    }
    function blogPost(Request $data){
        $data->validate([
            'title' => 'required',
            'post_details' => 'required',
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
        $slugCheck = blog::where('slug', $slug)->count();
        if($slugCheck>0){
            $slug = $slug.time();
        }
     
        if($data->hasFile('image')){
            $img = $data->file('image');
            $ext = $img->getClientOriginalExtension();
            $imgName = $slug.'.'.$ext;
            Image::make($img)->save(public_path('admin/images/blog'.'/'.$imgName));
        }
        
       blog::insert([
            'title' => $data->title,
            'image' => $imgName,
            'post_details' => $data->post_details,
            'slug' => $slug,
            'author' => auth()->user()->id,
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('blogView')->with('Msg', 'Blog is posted');
    }

    function blogView(){
        $blog = blog::where('author', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(4);
        return view('admin.blog.View',compact('blog'));
    }

    function allBlog(){
        $blog = blog::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.blog.View',compact('blog'));
    }
    

    function blogUpdate($slug){
        $blog = blog::where('slug', $slug)->first();

        return view('admin.blog.Update', compact('blog'));
    }
    function blogUpdatePost(Request $data){
    
        $data->validate([
            'title' => 'required',
            'post_details' => 'required',
        
        ]);
        
        $singleBlog = blog::findOrFail($data->id);
        $oldImgName = $singleBlog->image;
        if($data->hasFile('image')){
            if(file_exists(public_path('admin/images/blog'.'/'.$oldImgName))){
                unlink(public_path('admin/images/blog'.'/'.$oldImgName));
            }
           $img = $data->file('image');
           $ext = $img->getClientOriginalExtension();
           $slug = $singleBlog->slug;
           $imgName = $slug.'.'.$ext;
           Image::make($img)->save(public_path('admin/images/blog'.'/'.$imgName));
           $oldImgName =  $imgName; 
        }
    
        $singleBlog->update([
            'title' => $data->title,
            'image' => $oldImgName,
            'post_details' => $data->post_details,
            
        ]);

        return redirect()->route('blogView')->with('Msg', 'Blog is successfully updated');
     
    }

    function blogDelete($slug){
        $singleBlog = blog::where('slug',$slug)->first();
            $oldImgName = $singleBlog->image;
            if(file_exists(public_path('admin/images/blog'.'/'.$oldImgName))){
                unlink(public_path('admin/images/blog'.'/'.$oldImgName));
            }
            $singleBlog->delete();
            return back()->with('deleteMsg', "Your post is deleted");
    }

    function viewCommentOnPage($id){
        $comment = blogComments::findOrFail($id);
        $comment->update(['status' => 1]);
        return redirect('singleBlog/'.$comment->blogSlug.'#next_prev');
    }

    function allComments(){
        $comments = blogComments::orderBy('created_at', 'desc')->paginate(8);
        return view('admin.allcomments', compact('comments'));
    }

    function commentDelete($id){
        $comment = blogComments::findOrFail($id);
        $slug = $comment->blogSlug;
        $comment->delete();
        return redirect('singleBlog/'.$slug.'#next_prev');
    }

    function allCommentClear(){
        $comments = blogComments::get();
        foreach($comments as $item){
            $item->update(['status' => 1]);
        }
        return back();
    }

}
