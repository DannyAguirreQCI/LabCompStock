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
        Schema::table('computadoras', function (Blueprint $table) {
            $table->float('precio')->change();
            $table->renameColumn('numserie', 'precio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('computadoras', function (Blueprint $table) {
            $table->string('precio')->change();
            $table->renameColumn('precio', 'numserie');
        });
    }
};
