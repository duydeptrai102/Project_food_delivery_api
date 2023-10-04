<?php
namespace App\Http\Controllers;

use App\Models\ReviewShiper;
use Illuminate\Http\Request;

class ReviewShiperController extends Controller
{
    public function index()
    {
        $reviewShipers = ReviewShiper::all();
        return response()->json($reviewShipers);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $reviewShiper = ReviewShiper::create($data);
        return response()->json($reviewShiper);
    }

    public function show($id)
    {
        $reviewShiper = ReviewShiper::find($id);

        return response()->json($reviewShiper);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $reviewShiper = ReviewShiper::find($id);

        if ($reviewShiper) {
            $reviewShiper->update($data);
        }

        return response()->json($reviewShiper);
    }

    public function destroy($id)
    {
        $reviewShiper = ReviewShiper::find($id);

        if ($reviewShiper) {
            $reviewShiper->delete();
        }

        return response()->json(['message' => 'ReviewShiper deleted']);
    }
}
