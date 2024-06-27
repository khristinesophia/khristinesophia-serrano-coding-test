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
}
