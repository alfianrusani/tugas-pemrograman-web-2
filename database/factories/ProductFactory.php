<?php

namespace Database\Factories;

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
            ['name' => 'Samsung Galaxy A14', 'price' => 2200000, 'category' => 'Handphone'],
            ['name' => 'Xiaomi Redmi Note 12', 'price' => 2500000, 'category' => 'Handphone'],
            ['name' => 'iPhone', 'price' => 6000000, 'category' => 'Handphone'],

            // Laptop
            ['name' => 'Asus VivoBook 14', 'price' => 7500000, 'category' => 'Laptop'],
            ['name' => 'Lenovo IdeaPad 3', 'price' => 6800000, 'category' => 'Laptop'],

            // Tablet
            ['name' => 'Samsung Galaxy Tab A7', 'price' => 3200000, 'category' => 'Tablet'],

            // Headset
            ['name' => 'JBL Tune 510BT', 'price' => 700000, 'category' => 'Headset'],

            // Monitor
            ['name' => 'LG 24MP400', 'price' => 1800000, 'category' => 'Monitor'],

            // Mouse
            ['name' => 'Logitech G102', 'price' => 250000, 'category' => 'Mouse'],

            // Keyboard
            ['name' => 'Fantech MK853', 'price' => 500000, 'category' => 'Keyboard'],
        ];

        $product = fake()->randomElement($products);

        return [
            'name' => $product['name'] . ' ' . fake()->unique()->numberBetween(1, 999),
            'price' => 'Rp ' . $product['price'],
            'stock' => fake()->numberBetween(0, 50),
            'description' => $product['category'] . ' dengan kualitas baik',
            'status' => fake()->boolean(90),
        ];
    }
}
