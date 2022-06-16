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
        DB::table('sections')->insert([
            ['title' => 'Carousel-1', 'description' => '', 'slug' => 'carousel-1', 'isActive' => 'true'],
            ['title' => 'Carousel-2', 'description' => '', 'slug' => 'carousel-2', 'isActive' => 'true'],
            ['title' => 'Carousel-3', 'description' => '', 'slug' => 'carousel-3', 'isActive' => 'true'],
            ['title' => 'About', 'description' => '', 'slug' => 'about', 'isActive' => 'true'],
            ['title' => 'Header About', 'description' => '', 'slug' => 'header-about', 'isActive' => 'true'],
            ['title' => 'Event', 'description' => '', 'slug' => 'event', 'isActive' => 'true'],
            ['title' => 'Produk-1', 'description' => '', 'slug' => 'produk-1', 'isActive' => 'true'],
            ['title' => 'Produk-2', 'description' => '', 'slug' => 'produk-2', 'isActive' => 'true'],
            ['title' => 'Produk-3', 'description' => '', 'slug' => 'produk-3', 'isActive' => 'true'],
            ['title' => 'Produk-4', 'description' => '', 'slug' => 'produk-4', 'isActive' => 'true'],
            ['title' => 'gallery', 'description' => '', 'slug' => 'gallery', 'isActive' => 'true'],
            ['title' => 'Contact', 'description' => '', 'slug' => 'contact', 'isActive' => 'true'],
            ['title' => 'Maps', 'description' => '', 'slug' => 'maps', 'isActive' => 'true'],
            ['title' => 'Help', 'description' => '', 'slug' => 'help', 'isActive' => 'true'],
            ['title' => 'Blog', 'description' => '', 'slug' => 'blog', 'isActive' => 'true'],
            ['title' => 'Footer', 'description' => '', 'slug' => 'footer', 'isActive' => 'true'],
        ]);
        DB::table('settings')->insert(['lokasi' => '', 'telpon' => '', 'email' => '', 'logo' => '', 'favicon' => '', 'web_title' => 'Desa Loha']);
    }
}
