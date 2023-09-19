<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = Category::paginate(7);
        if(isset($request->keyword)){
            $keyword = $request->keyword;
            $categories = Category::where('category_name', 'like', '%' . $keyword . '%')->paginate(7);

        }
        return view('categories.index',compact('categories'));
    }
    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        $cate = new Category();
        $cate->category_name = $request->category_name;
        $cate->description = $request->description;
        $cate->save();
        return redirect()->route('categories.index');
    }
    public function edit($id){
        $cate= Category::find($id);
        return view('categories.edit',compact('cate')).$id;
    }
    public function update(Request $request, $id){
        $cate = Category::find($id);
        $cate->category_name = $request->category_name;
        $cate->description = $request->description;
        $cate->save();
        return redirect()->route('categories.index');
    }
    public function show($id){
        $cate= Category::find($id);
        return view('categories.show',compact('cate'));
    }
}
