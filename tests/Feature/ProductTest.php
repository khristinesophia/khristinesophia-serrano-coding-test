<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_product() : void
    {
        $response = $this->post('/products', [
            'name' => 'Sample Product',
            'description' => 'This is a test product.',
            'price' => 10.99,
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('products', ['name' => 'Sample Product']);
    }

    public function test_can_update_product() : void
    {
        $product = Product::factory()->create();

        $response = $this->put("/products/{$product->id}", [
            'name' => 'Updated Product Name',
            'description' => 'Updated product description.',
            'price' => 19.99,
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('products', ['name' => 'Updated Product Name']);
    }

    public function test_can_delete_product() : void
    {
        $product = Product::factory()->create();

        $response = $this->delete("/products/{$product->id}");

        $response->assertStatus(302);
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
