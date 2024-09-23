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
        Schema::create('feed_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auther_id');
            $table->text('image');
            $table->string('title');
            $table->text('slug');
            $table->text('content');
            $table->boolean('status')->default(0);
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_users');
    }
};
