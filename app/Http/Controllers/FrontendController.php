<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $products=Product::all();
        $categories=Category::all();
        return view("frontend.master",compact('products','categories'));
    }

    // public function search(Request $request){
    //     $products=Product::orderBy('id','desc')->where('name','LIKE','%'.$request->product.'%');
    //     if($request->category != "ALL") $products->where('category_id',$request->category);
    //     $products= $products->get();
    //     $categories= Category::all();
    //     $products=Product::all();
    //     return view('frontend.master',compact('categories','products'));


    //         // $search = $request->search;

    //         // $posts =Product::where(function($query) use ($search){

    //         //     $query->where('name','like',"%$search%")
    //         //     ->orWhere('description','like',"%$search%");

    //         //     })
    //         //     ->orWhereHas('category',function($query) use($search){
    //         //         $query->where('name','like',"%$search%");
    //         //     })

    //         //     ->get();

    //         //     return view('index',compact('posts','search'));

    // }
    public function search(Request $request)
    {
        $products = Product::orderBy('id', 'desc')->where('category_id', 'LIKE', '%' . $request->product . '%');
        if ($request->category != "ALL") {
            $products->where('category_id', $request->category);
        }
        $products = $products->get();
        $categories = Category::all();


        return view('frontend.master', compact('categories', 'products'));
    }


}
