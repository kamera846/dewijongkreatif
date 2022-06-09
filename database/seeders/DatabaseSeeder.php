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
        // $table->id();
        //     $table->string('foto_profil')->nullable();
        //     $table->text('nama');
        //     $table->string('email')->unique();
        //     $table->string('password');
        //     $table->text('alamat');
        //     $table->text('pekerjaan')->nullable();
        //     $table->string('no_hp')->nullable();
        //     $table->string('role')->nullable();
        //     $table->string('email_verified_at')->nullable();
        //     $table->rememberToken();
        //     $table->timestamps();
        //     $table->softDeletes();
        DB::table('users')->insert([
            'foto_profil' => null,
            'nama' => 'Super Admin',
            'email' => 'super@gmail.com',
            'password' => hash::make('password'),
            'alamat' => '',
            'pekerjaan' => null,
            'no_hp' => null,
            'role' => null,
            'role' => 'Super-admin',
            'email_verified_at' => null
        ]);
    }
}
