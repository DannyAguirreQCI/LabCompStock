<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            DB::statement("UPDATE products SET status = 'activo' WHERE status = 'active'");
            DB::statement("UPDATE products SET status = 'descontinuado' WHERE status = 'discontinued'");
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            DB::statement("UPDATE products SET status = 'active' WHERE status = 'activo'");
            DB::statement("UPDATE products SET status = 'discontinued' WHERE status = 'descontinuado'");
        });
    }
};
