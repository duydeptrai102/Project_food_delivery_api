<?php

namespace App\Http\Controllers;

use App\Models\TypeAccount;
use Illuminate\Http\Request;

class TypeAccountController extends Controller
{
    public function index()
    {
        $typeAccounts = TypeAccount::all();
        return response()->json($typeAccounts);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $typeAccount = TypeAccount::create($data);
        return response()->json($typeAccount);
    }

    public function show($id)
    {
        $typeAccount = TypeAccount::find($id);

        return response()->json($typeAccount);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $typeAccount = TypeAccount::find($id);

        if ($typeAccount) {
            $typeAccount->update($data);
        }

        return response()->json($typeAccount);
    }

    public function destroy($id)
    {
        $typeAccount = TypeAccount::find($id);

        if ($typeAccount) {
            $typeAccount->delete();
        }

        return response()->json(['message' => 'TypeAccount deleted']);
    }
}
