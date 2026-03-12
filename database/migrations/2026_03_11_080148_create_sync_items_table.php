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
        Schema::create('sync_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('run_id')->constrained('sync_runs', 'id')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products', 'id')->cascadeOnDelete();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sync_items');
    }
};
