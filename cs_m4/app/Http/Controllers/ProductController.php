<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::with('category');
    
        if ($request->has('keyword')) {
            $keyword = $request->keyword;
            $products->where('product_name', 'like', '%' . $keyword . '%');
        }
    
        $products = $products->paginate(3);
    
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            $pro = new Product();
            $pro->product_name = $request->product_name;
            $pro->category_id = $request->category_id;
            $pro->quantity = $request->quantity;
            $pro->price = $request->price;
            $pro->status = $request->status;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
    
                // Lưu hình ảnh gốc vào thư mục "storage/images"
                $image->storeAs('public/images', $filename);
    
                // Đường dẫn đến hình ảnh lưu trong cơ sở dữ liệu
                $pro->image = 'images/' . $filename;
            }
           
            $pro->save();
            return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        return view('products.edit', compact('product', 'categories')) . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;

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
        $product->status = $request->status;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
