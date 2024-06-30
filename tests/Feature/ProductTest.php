<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase; // Refreshes database after each test

    /** @test */
    public function can_create_product()
    {
        $response = $this->post('/products', [
            'name' => 'Sample Product',
            'description' => 'This is a test product.',
            'price' => 10.99,
        ]);

        $response->assertStatus(302); // Assert redirect after successful creation
        $this->assertDatabaseHas('products', ['name' => 'Sample Product']);
    }

    /** @test */
    public function can_update_product()
    {
        $product = Product::factory()->create();

        $response = $this->put("/products/{$product->id}", [
            'name' => 'Updated Product Name',
            'description' => 'Updated product description.',
            'price' => 19.99,
        ]);

        $response->assertStatus(302); // Assert redirect after successful update
        $this->assertDatabaseHas('products', ['name' => 'Updated Product Name']);
    }

    /** @test */
    /** @test */
    public function can_delete_product()
    {
        $product = Product::factory()->create();

        $response = $this->delete("/products/{$product->id}");

        $response->assertStatus(302); // Assert redirect after successful delete
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
