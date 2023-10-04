<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return response()->json($stores);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $store = Store::create($data);
        return response()->json($store);
    }

    public function show($id)
    {
        $store = Store::find($id);

        return response()->json($store);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $store = Store::find($id);

        if ($store) {
            $store->update($data);
        }

        return response()->json($store);
    }

    public function destroy($id)
    {
        $store = Store::find($id);

        if ($store) {
            $store->delete();
        }

        return response()->json(['message' => 'Store deleted']);
    }
}
