<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $products = [
            // Handphone
            [
                'name' => 'Samsung Galaxy A14',
                'brand' => 'Samsung',
                'price' => 2200000,
                'category' => 'Handphone'
            ],
            [
                'name' => 'Xiaomi Redmi Note 12',
                'brand' => 'Xiaomi',
                'price' => 2500000,
                'category' => 'Handphone'
            ],
            [
                'name' => 'iPhone',
                'brand' => 'Apple',
                'price' => 6000000,
                'category' => 'Handphone'
            ],

            // Laptop
            [
                'name' => 'Asus VivoBook 14',
                'brand' => 'Asus',
                'price' => 7500000,
                'category' => 'Laptop'
            ],
            [
                'name' => 'Lenovo IdeaPad 3',
                'brand' => 'Lenovo',
                'price' => 6800000,
                'category' => 'Laptop'
            ],

            // Tablet
            [
                'name' => 'Samsung Galaxy Tab A7',
                'brand' => 'Samsung',
                'price' => 3200000,
                'category' => 'Tablet'
            ],

            // Headset
            [
                'name' => 'JBL Tune 510BT',
                'brand' => 'JBL',
                'price' => 700000,
                'category' => 'Headset'
            ],

            // Monitor
            [
                'name' => 'LG 24MP400',
                'brand' => 'LG',
                'price' => 1800000,
                'category' => 'Monitor'
            ],

            // Mouse
            [
                'name' => 'Logitech G102',
                'brand' => 'Logitech',
                'price' => 250000,
                'category' => 'Mouse'
            ],

            // Keyboard
            [
                'name' => 'Fantech MK853',
                'brand' => 'Fantech',
                'price' => 500000,
                'category' => 'Keyboard'
            ],
        ];

        $product = fake()->randomElement($products);
        $category = Category::firstWhere('name', $product['category']);

        if (!$category) {
            $category = Category::create([
                'name' => $product['category'],
                'code' => strtoupper(substr($product['category'], 0, 3)),
                'description' => 'Kategori ' . $product['category'],
            ]);
        }

        return [
            'name' => $product['name'] . ' ' . fake()->unique()->numberBetween(1, 999),
            'category_id' => $category?->id,
            'brand' => $product['brand'],
            'price' => $product['price'],
            'stock' => fake()->numberBetween(0, 50),
            'description' => $category->name . ' dengan kualitas baik',
            'status' => fake()->boolean(90),
        ];
    }
}
