<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function create(array $attributes): Product
    {
        return Product::create($attributes);
    }

    public function update(Product $product, array $attributes): Product
    {
        $product->update($attributes);
        return $product;
    }

    public function delete(Product $product): void
    {
        $product->delete();
    }

    public function findById(int $id): ?Product
    {
        return Product::find($id);
    }

    public function getAllPaginated(int $perPage = 10)
    {
        return Product::paginate($perPage);
    }
}
