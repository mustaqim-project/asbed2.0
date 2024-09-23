<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kalori_makanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan');
            $table->string('porsi_gr');
            $table->integer('kalori');
            $table->float('protein');
            $table->float('lemak');
            $table->float('karbohidrat');
            $table->float('serat')->default(0);
            $table->float('gula')->default(0);
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kalori_makanans');
    }
};
