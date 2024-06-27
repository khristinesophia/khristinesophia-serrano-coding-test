<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::paginate(10);
    }

    public function show($id){
        return Product::findOrFail($id);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|between:0,999999.99',
        ]);

        return Product::create($request->all());
    }

    public function update(Request $request, $id){
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|between:0,999999.99',
        ]);

        $product->update($request->all());

        return $product;
    }

    public function destroy(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
