<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shopping_carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Relaciona el carrito con un usuario
            $table->foreignId('product_id')->constrained(); // Relaciona el carrito con un producto
            $table->integer('quantity')->default(1); // La cantidad de productos en el carrito
            $table->decimal('total_price', 8, 2); // El precio total del carrito
            $table->enum('status', ['active', 'completed'])->default('active'); // Estado del carrito
            $table->timestamps(); // Fecha de creación y actualización del carrito
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_carts');
    }
};
