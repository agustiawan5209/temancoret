<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->string('katalog');
            $table->enum('jenis', ['Lengan Pendek', 'Lengan Panjang', 'Hoddie', 'Krunet']);
            $table->integer('stok');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produk');
    }
}
