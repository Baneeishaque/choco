<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\product;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
    }
    public function products(){
        DB::enableQueryLog();
        $products = Product::select('id','name')->get();
        $images = DB::table('images')->get();
        //dd(DB::getQueryLog());exit;
        // echo "<pre>";  print_r($images); echo "</pre>"; exit;
        return view('grid-shop',['products'=>$products,'images'=>$images]);
    }
    public function admin(){
        return view('admin.product.create');
    }
}
