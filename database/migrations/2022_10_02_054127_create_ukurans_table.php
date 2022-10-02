<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUkuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukurans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('produk_id')->nullable();
            $table->string('ukuran')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ukurans');
    }
}
