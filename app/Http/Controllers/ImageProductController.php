<?php

namespace App\Http\Controllers;

use App\Models\ImageProduct;
use Illuminate\Http\Request;

class ImageProductController extends Controller
{
    public function index()
    {
        $imageProducts = ImageProduct::all();
        return response()->json($imageProducts);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $imageProduct = ImageProduct::create($data);
        return response()->json($imageProduct);
    }

    public function show($id)
    {
        $imageProduct = ImageProduct::find($id);

        return response()->json($imageProduct);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $imageProduct = ImageProduct::find($id);

        if ($imageProduct) {
            $imageProduct->update($data);
        }

        return response()->json($imageProduct);
    }

    public function destroy($id)
    {
        $imageProduct = ImageProduct::find($id);

        if ($imageProduct) {
            $imageProduct->delete();
        }

        return response()->json(['message' => 'ImageProduct deleted']);
    }
}
