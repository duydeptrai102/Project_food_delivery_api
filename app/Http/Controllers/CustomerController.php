<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $customer = Customer::create($data);
        return response()->json($customer);
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        return response()->json($customer);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $customer = Customer::find($id);

        if ($customer) {
            $customer->update($data);
        }

        return response()->json($customer);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);

        if ($customer) {
            $customer->delete();
        }

        return response()->json(['message' => 'Customer deleted']);
    }
}
