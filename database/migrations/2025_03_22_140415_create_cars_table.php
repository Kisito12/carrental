<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('make')->nullable();
            $table->string('brand')->nullable();
            $table->integer('year')->nullable();
            $table->decimal('price_per_day', 10, 2);
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive', 'maintenance'])->default('active')->nullable();
            $table->boolean('available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
