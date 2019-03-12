<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comments;
use App\Contact;
use Illuminate\Http\Request;

class CookeryController extends Controller
{
    //
    public function index(){

        $recs = Blog::with('comment')->Recent()->get();

        return view('frontend.index',compact('recs'));
    }

    public function blog(){
        $blogs = Blog::with('comment')->get();
        $recs = Blog::Recent()->get();
        return view('frontend.blog',compact('blogs','recs'));
    }
    public function events(){
        $recs = Blog::Recent()->get();

        return view('frontend.events',compact('recs'));
    }
    public function contact(){

        return view('frontend.contact');
    }
    public function menu(){

        return view('frontend.menu');
    }
    public function single($id){


        $blog = Blog::findOrFail($id);
        $coms = $blog->comment()->get();
        $recs = Blog::Recent()->get();
//        $blogs=Blog::all();
        return view('frontend.single',compact('blog','recs','coms'));
    }
    public function jn(Request $request){

        $input = $request->all();
        Contact::create($input);
        return redirect()->back()->with('message','You have contacted with us successfully');

    }

    public function com(Blog $blog, Request $request){

//        $input = $request->all();
//        $blog->createComment($input);
        $data =['blog_id'=>$request->blog_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'comment'=>$request->comment
        ];
        Comments::create($data);
        return redirect()->back()->with('message', "Your comment successfully send.");

    }
}
