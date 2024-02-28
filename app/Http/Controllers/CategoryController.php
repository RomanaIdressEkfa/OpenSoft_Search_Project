<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 5 : 0;
        $categories=Category::latest()->paginate(5);
        return view('backend.layouts.category.index',compact('categories','sl'));
    }


    public function create(){
        return view('backend.layouts.category.create');
    }


    public function store(Request $request){

        try{
            $data = $request->all();
            Category::create($data);
            return redirect()->route('category_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }

    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.layouts.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Category::where('id', $id)->update($data);
            return redirect()->route('category_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }

    }

    public function delete($id)
    {
        $category =Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
