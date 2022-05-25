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
            $table->id();
            $table->string('foto_profil')->nullable();
            $table->text('nama');
            $table->text('email')->unique();
            $table->string('password');
            $table->text('alamat');
            $table->text('pekerjaan')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('role')->nullable();
            $table->string('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
