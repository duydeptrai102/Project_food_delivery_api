<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return response()->json($addresses);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'city' => 'required|string',
            'district' => 'required|string',
            'ward' => 'required|string',
            'address' => 'required|string',
        ]);

        $address = Address::create($data);
        return response()->json($address);
    }

    public function show($id)
    {
        $address = Address::find($id);

        return response()->json($address);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'city' => 'string',
            'district' => 'string',
            'ward' => 'string',
            'address' => 'string',
        ]);

        $address = Address::find($id);

        if ($address) {
            $address->update($data);
        }

        return response()->json($address);
    }

    public function destroy($id)
    {
        $address = Address::find($id);

        if ($address) {
            $address->delete();
        }

        return response()->json(['message' => 'Address deleted']);
    }
}

