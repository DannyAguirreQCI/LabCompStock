<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Product::create([
            'name' => 'Producto 1',
            'description' => 'Descripción del Producto 1',
            'price' => 10.99,
            'stock_quantity' => 100,
            'category' => 'Categoría 1',
            'status' => 'Activo'
        ]);

        Product::create([
            'name' => 'Producto 2',
            'description' => 'Descripción del Producto 2',
            'price' => 20.49,
            'stock_quantity' => 50,
            'category' => 'Categoría 2',
            'status' => 'Activo'
        ]);*/

        Product::factory()->count(50)->create();
    }
}
