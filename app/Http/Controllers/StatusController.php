<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return response()->json($statuses);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $status = Status::create($data);
        return response()->json($status);
    }

    public function show($id)
    {
        $status = Status::find($id);

        return response()->json($status);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $status = Status::find($id);

        if ($status) {
            $status->update($data);
        }

        return response()->json($status);
    }

    public function destroy($id)
    {
        $status = Status::find($id);

        if ($status) {
            $status->delete();
        }

        return response()->json(['message' => 'Status deleted']);
    }
}
