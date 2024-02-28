<?php

namespace App\Http\Controllers;

use App\Helpers\Upload;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{
    public function index()
    {

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 5 : 0;
        $products = Product::latest()->paginate(5);
        $categories=Category::all();
        return view('backend.layouts.products.index', compact('products','sl','categories'));
    }


    public function create()
    {
        $categories=Category::all();
        return view('backend.layouts.products.create',compact('categories'));
    }


    // public function view($id)
    // {
    //     $product = Product::find($id);
    //     return view('backend.layouts.Employees.view', compact('product'));
    // }


    public function store(StoreProductRequest $request)
    {

        try {

            $data= $request->all();
            if($request->image){
                $imageName = '';
                // upload image
                $imageName = Upload::uploadImage($request->image, 'images/products');
                $data["image"]=$imageName;
            }
            Product::create($data);
            toastr()->success('Employee has been created successfully!', 'Congrats');
            return redirect()->route('product_index');
        } catch (Exception $e) {
            toastr()->error('Something went wrong!', 'Alert');
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories=Category::all();
        return view('backend.layouts.products.edit', compact('product','categories'));
    }


    public function update(UpdateProductRequest $request, $id)
    {
        try {
            // dd($request->all());
            $product = Product::findOrFail($id);
            $imageName = '';
            $deleteOldImage = 'images/products/' . $product->image;

            if ($image = $request->file('image')) {
                if (file_exists($deleteOldImage)) {
                    File::delete($deleteOldImage);
                } else {
                    $imageName = $product->image;
                }
                //update image
                $imageName = Upload::uploadImage($request->image, 'images/products');
            }

            $product->update([
                // 'name' => $request->name,
                'image' => $imageName,
                'description' => $request->description,
                'price' => $request->price,
            ]);

            toastr()->success('Product has been updated successfully!', 'Congrats');
            return redirect()->route('product_index');
        } catch (Exception $e) {
            toastr()->error('Something went wrong!', 'Alert');
        }
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $deleteOldImage = 'images/products/' . $product->image;
        File::delete($deleteOldImage);
        $product->delete();
        return redirect()->back();
    }
}
