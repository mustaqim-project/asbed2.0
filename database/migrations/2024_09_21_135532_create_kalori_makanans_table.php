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
            $table->id(); // id sebagai primary key
            $table->string('nama_makanan'); // Nama makanan
            $table->string('porsi_gr'); // Ukuran porsi dalam gram atau unit
            $table->integer('kalori'); // Kalori dalam kkal
            $table->float('protein'); // Protein dalam gram
            $table->float('lemak'); // Lemak dalam gram
            $table->float('karbohidrat'); // Karbohidrat dalam gram
            $table->float('serat')->default(0); // Serat dalam gram (opsional)
            $table->float('gula')->default(0); // Gula dalam gram (opsional)
            $table->string('kategori')->nullable(); // Kategori makanan
            $table->timestamps(); // created_at dan updated_at
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
