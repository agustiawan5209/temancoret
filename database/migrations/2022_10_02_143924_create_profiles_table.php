<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('logo')->nullable();
            $table->string('nama')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('ig')->nullable();
            $table->string('fb')->nullable();
            $table->string('wa')->nullable();
            $table->string('alamat')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
