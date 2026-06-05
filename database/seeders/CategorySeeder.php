<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Handphone',
            'code' => 'HND',
            'description' => 'Kategori untuk produk elektronik seperti smartphone.',
        ]);
        Category::create([
            'name' => 'Laptop',
            'code' => 'LPT',
            'description' => 'Kategori untuk produk elektronik seperti laptop.',
        ]);
        Category::create([
            'name' => 'Tablet',
            'code' => 'TBL',
            'description' => 'Kategori untuk produk elektronik seperti tablet.',
        ]);
        Category::create([
            'name' => 'Monitor',
            'code' => 'PRT',
            'description' => 'Kategori untuk produk elektronik seperti printer.',
        ]);
        Category::create([
            'name' => 'Headset',
            'code' => 'HSD',
            'description' => 'Kategori untuk produk elektronik seperti headset.',
        ]);
        Category::create([
            'name' => 'Keyboard',
            'code' => 'KBD',
            'description' => 'Kategori untuk produk elektronik seperti keyboard.',
        ]);
        Category::create([
            'name' => 'Mouse',
            'code' => 'MS',
            'description' => 'Kategori untuk produk elektronik seperti mouse.',
        ]);
    }
}
