<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'foto_profil' => null,
            'nama' => 'Super Admin',
            'email' => 'super@gmail.com',
            'password' => hash::make('password'),
            'alamat' => 'Jalan jalan',
            'pekerjaan' => null,
            'no_hp' => null,
            'role' => 'super-admin',
            'email_verified_at' => null
        ]);
        DB::table('menus')->insert([
            ['title' => '', 'description' => '', 'slug' => 'carousel-1', 'isActive' => 'true'],
            ['title' => '', 'description' => '', 'slug' => 'carousel-2', 'isActive' => 'true'],
            ['title' => '', 'description' => '', 'slug' => 'carousel-3', 'isActive' => 'true'],
            ['title' => '', 'description' => '', 'slug' => 'about', 'isActive' => 'true'],
            ['title' => '', 'description' => '', 'slug' => 'event', 'isActive' => 'true'],
            ['title' => '', 'description' => '', 'slug' => 'gallery', 'isActive' => 'true'],
            ['title' => '', 'description' => '', 'slug' => 'contact', 'isActive' => 'true'],
            ['title' => '', 'description' => '', 'slug' => 'blog', 'isActive' => 'true'],
        ]);
        DB::table('settings')->insert(['lokasi' => '', 'telpon' => '', 'email' => '', 'logo' => '', 'favicon' => '', 'web_title' => 'Desa Loha']);
    }
}
