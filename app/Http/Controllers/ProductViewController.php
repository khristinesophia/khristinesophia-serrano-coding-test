<?php

// app/Http/Controllers/ProductViewController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductViewController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProductsPaginated(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|between:0,999999.99',
        ]);

        $this->productService->createProduct($request->all());
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = $this->productService->getProductById($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = $this->productService->getProductById($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|between:0,999999.99',
        ]);

        $product = $this->productService->getProductById($id);
        $this->productService->updateProduct($product, $request->all());

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = $this->productService->getProductById($id);
        $this->productService->deleteProduct($product);

        return redirect()->route('products.index');
    }
}
