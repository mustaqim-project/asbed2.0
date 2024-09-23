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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name')->unique(); // Nama kategori dengan nilai unik
            $table->string('slug')->unique(); // Slug untuk kategori (gunakan unique untuk memastikan slug unik)
            $table->boolean('show_at_nav')->default(false); // Tampilkan di navigasi, default false
            $table->boolean('status')->default(true); // Status aktif atau tidak, default true
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
