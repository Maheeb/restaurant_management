<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Blog::all();
        return view('backend.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->all();
        if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/frontend/images');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }
        Blog::create($inputs);
        return redirect()->back()->with('message', "You have created Post successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Blog::findOrFail($id);
        return view("backend.post.edit",compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $posts = Blog::findOrFail($id);
        $inputs = $request->all();
        if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/frontend/images');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }
        $posts->update($inputs);
        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Blog::findOrFail($id);
        unlink(public_path('frontend/images/').$post->image);
        $post->delete();

        return redirect('/admin/posts');
    }
}
