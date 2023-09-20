<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products1 = Product::join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.*', 'categories.category_name');
    
    if (isset($request->keyword)) {
        $keyword = $request->keyword;
        $products = $products1->where('products.name', 'like', '%' . $keyword . '%')->paginate(7);
    } else {
        $products = $products1->paginate(7);
    }
    
    return view('products.index', compact('products'));
}


    public function create()
    {
        $categories = Category::get();
        return view('products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Lưu hình ảnh gốc vào thư mục "storage/images"
            $image->storeAs('public/images', $filename);

            // Đường dẫn đến hình ảnh lưu trong cơ sở dữ liệu
            $product->image = 'images/' . $filename;
        }
        $product->category_id  = $request->category_id;
        $product->status = $request->status;
        $product->save();
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        return view('products.edit', compact('product', 'categories')) . $id;
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            // Tải lên hình ảnh mới
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);

            // Cập nhật đường dẫn hình ảnh trong cơ sở dữ liệu
            $product->image = 'images/' . $filename;

            // Xóa hình ảnh cũ (nếu có)
            $oldImage = $product->getOriginal('image');
            if ($oldImage && $oldImage !== $product->image) {
                Storage::delete('public/' . $oldImage);
            }
        }
        $product->category_id  = $request->category_id;
        $product->status = $request->status;
        $product->save();
        return redirect()->route('products.index');
    }
    public function delete($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index');
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }
}
