<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        profile::create(array(
            "id" => 1,
            "created_at" => "2022-10-02 14:43:12",
            "updated_at" => "2022-10-02 14:51:06",
            "logo" => "upload/logo-putih-removebg-preview.png",
            "nama" => "TemanCoret.Std",
            "deskripsi" => "Brand Lokal Makassar",
            "ig" => "https://www.instagram.com/temancoret.studio/",
            "fb" => NULL,
            "wa" => NULL,
            "alamat" => NULL,
        ));
    }
}
