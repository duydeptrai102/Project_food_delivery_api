<?php

namespace App\Http\Controllers;

use App\Models\StatusOrder;
use Illuminate\Http\Request;

class StatusOrderController extends Controller
{
    public function index()
    {
        $statusOrders = StatusOrder::all();
        return response()->json($statusOrders);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $statusOrder = StatusOrder::create($data);
        return response()->json($statusOrder);
    }

    public function show($id)
    {
        $statusOrder = StatusOrder::find($id);

        return response()->json($statusOrder);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $statusOrder = StatusOrder::find($id);

        if ($statusOrder) {
            $statusOrder->update($data);
        }

        return response()->json($statusOrder);
    }

    public function destroy($id)
    {
        $statusOrder = StatusOrder::find($id);

        if ($statusOrder) {
            $statusOrder->delete();
        }

        return response()->json(['message' => 'StatusOrder deleted']);
    }
}
