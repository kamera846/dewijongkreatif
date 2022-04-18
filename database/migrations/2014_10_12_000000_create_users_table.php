<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->text('foto_profil')->nullable();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('pekerjaan')->nullable();
            $table->integer('no_hp')->nullable();
            $table->text('alamat');
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
};
