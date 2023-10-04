<?php

namespace App\Http\Controllers;

use App\Models\AddressOrder;
use Illuminate\Http\Request;

class AddressOrderController extends Controller
{
    public function index()
    {
        $addressOrders = AddressOrder::all();
        return response()->json($addressOrders);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $addressOrder = AddressOrder::create($data);
        return response()->json($addressOrder);
    }

    public function show($id)
    {
        $addressOrder = AddressOrder::find($id);

        return response()->json($addressOrder);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $addressOrder = AddressOrder::find($id);

        if ($addressOrder) {
            $addressOrder->update($data);
        }

        return response()->json($addressOrder);
    }

    public function destroy($id)
    {
        $addressOrder = AddressOrder::find($id);

        if ($addressOrder) {
            $addressOrder->delete();
        }

        return response()->json(['message' => 'AddressOrder deleted']);
    }
}
