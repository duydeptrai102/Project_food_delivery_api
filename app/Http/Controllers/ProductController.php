<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $product = Product::create($data);
        return response()->json($product);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = Product::find($id);

        if ($product) {
            $product->update($data);
        }

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
        }

        return response()->json(['message' => 'Product deleted']);
    }
}
