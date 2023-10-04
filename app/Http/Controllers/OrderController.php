<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $order = Order::create($data);
        return response()->json($order);
    }

    public function show($id)
    {
        $order = Order::find($id);

        return response()->json($order);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $order = Order::find($id);

        if ($order) {
            $order->update($data);
        }

        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        if ($order) {
            $order->delete();
        }

        return response()->json(['message' => 'Order deleted']);
    }
}
