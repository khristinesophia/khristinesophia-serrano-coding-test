<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Mesh WiFi Router',
            'description' => 'Expands your home Wi-Fi coverage for a stronger signal in every corner. Easy to set up.',
            'price' => 2499.00,
        ]);
        
        Product::create([
            'name' => 'Bamboo Charging Stand',
            'description' => 'Eco-conscious and stylish phone stand for charging.',
            'price' => 399.50,
        ]);
        
        Product::create([
            'name' => 'Noise-Cancelling Headphones',
            'description' => 'Block out surrounding noise and immerse yourself in your music or audiobooks.',
            'price' => 7999.00,
        ]);
        
        Product::create([
            'name' => 'Air Purifier',
            'description' => 'Improves indoor air quality by removing dust, allergens, and pet dander.',
            'price' => 4995.00,
        ]);
        
        Product::create([
            'name' => 'Stainless Steel Water Bottle',
            'description' => 'Keeps your drinks hot or cold for hours. Reusable and reduces plastic waste.',
            'price' => 475.00,
        ]);
        
        Product::create([
            'name' => 'Journal with Pen Set',
            'description' => 'Beautiful and inspiring journal for writing, drawing, or planning. Comes with a matching pen.',
            'price' => 329.95,
        ]);
        
        Product::create([
            'name' => 'Solar Phone Charger',
            'description' => 'Portable charger that uses solar power to keep your phone topped up on the go.',
            'price' => 1299.00,
        ]);
        
        Product::create([
            'name' => 'Coffee Maker (Single Serve)',
            'description' => 'Brews a delicious cup of coffee quickly and easily. Perfect for busy mornings.',
            'price' => 2750.00,
        ]);
        
        Product::create([
            'name' => 'Wireless Earphones',
            'description' => 'Enjoy music and calls with complete freedom of movement. Compact and comfortable design.',
            'price' => 1999.75,
        ]);
        
        Product::create([
            'name' => 'Mini Desk Lamp',
            'description' => 'Provides bright and adjustable light for your workspace. Stylish and space-saving design.',
            'price' => 599.00,
        ]);
        
        Product::create([
            'name' => 'Travel Backpack',
            'description' => 'Durable and comfortable backpack for all your travel needs.',
            'price' => 2995.00,
        ]);
        
        Product::create([
            'name' => 'Fitness Tracker',
            'description' => 'Tracks your steps, calories burned, and sleep patterns. Helps you stay motivated on your fitness journey.',
            'price' => 1499.00,
        ]);
        
        Product::create([
            'name' => 'Indoor Herb Garden Kit',
            'description' => 'Grow fresh herbs at home easily with this all-inclusive kit. Perfect for adding flavor to your cooking.',
            'price' => 499.75,
        ]);
        
        Product::create([
            'name' => 'Portable Blender',
            'description' => 'Make smoothies, shakes, and healthy drinks on the go. Compact and easy to clean.',
            'price' => 1799.00,
        ]);        
    }
}
