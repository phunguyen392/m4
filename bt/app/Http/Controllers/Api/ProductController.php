<?php

namespace App\Http\Controllers\Api;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['products' => $products]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validate the incoming data
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'description' ,
        'image',
        'price',

    ]);
    // Create a new Product
    $product = Product::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'image' => $request->input('image'),
        'price' => $request->input('price'),

    ]);
    return response()->json(['product' => $product], 201); // 201 Created
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'product not found'], 404); // 404 Not Found
        }
        return response()->json(['product' => $product]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming data
        $this->validate($request, [
            'name' => 'string|max:255',
            'description' ,
            'image' ,
            'price' ,

        ]);
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404); // 404 Not Found
        }
        // Update Product fields
        $product->name = $request->input('name', $product->name);
        $product->description = $request->input('description', $product->email);
        $product->image = $request->input('image', $product->image);
        $product->price = $request->input('price', $product->price);

        
        $product->save();
        return response()->json(['product' => $product]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $product = Product::find($id);
    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404); // 404 Not Found
    }
    $product->delete();
    return response()->json(['message' => 'User deleted'], 200); // 200 OK
}
}
