<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierApiController extends Controller
{
    public function index() {

        $suppliers = Supplier::all();
        return response()->json($suppliers);
    }

    public function show($id) {
        $supplier = Supplier::find($id);
        return response()->json(['message'=>'Success', 'data'=> $supplier]);
    }

    public function store(Request $request) {

        $supplier = Supplier::create($request->all());
        return response()->json(['message'=>'Success', 'data'=> $supplier]);
    }

    public function update(Request $request, $id) {

        $supplier = Supplier::find($id);
        $supplier->update($request->all());
        return response()->json(['message'=>'Success', 'data'=> $supplier]);
    }

    public function destroy($id) {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return response()->json(['message'=>'Success', 'data'=> null]);
    }
}
