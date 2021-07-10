<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('admin/blogs/list',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/blogs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=time().".".$request['image']->extension();
        $request['image']->move(public_path('blog_images'),$file);
        $model = new Blog;
        $model->title = $request['title'];
        $model->description = $request['description'];
        $model->image = $file;
        $model->save();

        return back()->with("message", "product Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Blog::find($id);
        return view('admin/blogs/edit',['blog'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog,$id)
    {
        $file=time().".".$request['image']->extension();
        $request['image']->move(public_path('blog_images'),$file);
        $model = Blog::find($id);
        $model->title = $request['title'];
        $model->description = $request['description'];
        $model->image = $file;
        $model->update();

        return back()->with("message","product Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        Blog::destroy($blog);
        return back();
    }
}
