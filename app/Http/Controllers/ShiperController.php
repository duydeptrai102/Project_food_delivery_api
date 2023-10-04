<?php
namespace App\Http\Controllers;

use App\Models\Shiper;
use Illuminate\Http\Request;

class ShiperController extends Controller
{
    public function index()
    {
        $shipers = Shiper::all();
        return response()->json($shipers);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $shiper = Shiper::create($data);
        return response()->json($shiper);
    }

    public function show($id)
    {
        $shiper = Shiper::find($id);

        return response()->json($shiper);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $shiper = Shiper::find($id);

        if ($shiper) {
            $shiper->update($data);
        }

        return response()->json($shiper);
    }

    public function destroy($id)
    {
        $shiper = Shiper::find($id);

        if ($shiper) {
            $shiper->delete();
        }

        return response()->json(['message' => 'Shiper deleted']);
    }
}
