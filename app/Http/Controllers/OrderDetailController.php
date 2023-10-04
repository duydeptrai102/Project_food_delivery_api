<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return response()->json($orderDetails);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $orderDetail = OrderDetail::create($data);
        return response()->json($orderDetail);
    }

    public function show($id)
    {
        $orderDetail = OrderDetail::find($id);

        return response()->json($orderDetail);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $orderDetail = OrderDetail::find($id);

        if ($orderDetail) {
            $orderDetail->update($data);
        }

        return response()->json($orderDetail);
    }

    public function destroy($id)
    {
        $orderDetail = OrderDetail::find($id);

        if ($orderDetail) {
            $orderDetail->delete();
        }

        return response()->json(['message' => 'OrderDetail deleted']);
    }
}
