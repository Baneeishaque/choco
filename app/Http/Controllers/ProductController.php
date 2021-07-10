<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        $images = DB::table('images')->get();
        return view('admin/product/list',['products'=>$products,'image'=>$images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $model = new Product;
        $model->name = $request['name'];
        $model->old_amount = $request['old_amount'];
        $model->recent_amount = $request['recent_amount'];
        $model->category = $request['category'];
        $model->weight = $request['weight'];
        $model->box = $request['box'];
        $model->description = $request['description'];
        $model->save();

        $imgx=count($request->image);

        for($x=0; $x<$imgx; $x++)
        {
            $file=time().".".$request->image[$x]->extension();
            $request->image[$x]->move(public_path('product_images'),$file); 
            //insert images into images table
            DB::table('images')->insert(
                ['images'=>$file,'product_id'=>$model->id]
            );
        }
        return back()->with("message", "product Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Product::find($id);
        return view('admin/product/edit',['product'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product,$id)
    {
        $model = Product::find($id);
        $model->name = $request['name'];
        $model->old_amount = $request['old_amount'];
        $model->recent_amount = $request['recent_amount'];
        $model->category = $request['category'];
        $model->weight = $request['weight'];
        $model->box = $request['box'];
        $model->description = $request['description'];
        $model->update();
        return back()->with("message","product Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        Product::destroy($product);
        DB::table('images')->where('product_id',$product)->delete();
        return back();
    }
}
