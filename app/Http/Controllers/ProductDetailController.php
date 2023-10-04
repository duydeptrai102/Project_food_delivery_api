<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index()
    {
        $productDetails = ProductDetail::all();
        return response()->json($productDetails);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $productDetail = ProductDetail::create($data);
        return response()->json($productDetail);
    }

    public function show($id)
    {
        $productDetail = ProductDetail::find($id);

        return response()->json($productDetail);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $productDetail = ProductDetail::find($id);

        if ($productDetail) {
            $productDetail->update($data);
        }

        return response()->json($productDetail);
    }

    public function destroy($id)
    {
        $productDetail = ProductDetail::find($id);

        if ($productDetail) {
            $productDetail->delete();
        }

        return response()->json(['message' => 'ProductDetail deleted']);
    }
}
