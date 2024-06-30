<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct(array $attributes): Product
    {
        return $this->productRepository->create($attributes);
    }

    public function updateProduct(Product $product, array $attributes): Product
    {
        return $this->productRepository->update($product, $attributes);
    }

    public function deleteProduct(Product $product): void
    {
        $this->productRepository->delete($product);
    }

    public function getProductById(int $id): ?Product
    {
        return $this->productRepository->findById($id);
    }

    public function getAllProductsPaginated(int $perPage = 10)
    {
        return $this->productRepository->getAllPaginated($perPage);
    }
}
