<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->longText('deskripsi_buku');
            $table->year('tahun_terbit');
            $table->integer('stok_buku');
            $table->string('gambar_buku');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
};
