<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            // //Agen
            // $table->string('first_name', 20)->nullable();
            // $table->string('last_name', 20)->nullable();
            // $table->string('nik', 20)->nullable();
            // $table->string('date_of_birth', 20)->nullable();
            // $table->string('phone_number', 20)->nullable();
            // $table->string('address', 150)->nullable();
            // $table->text('gambar_nik')->nullable();
            // $table->string('role', 20)->nullable();

            // //Calon_mhs
            // $table->string('no_telp_calon_mhs', 20)->nullable();
            // $table->string('no_telp_orang_tua', 20)->nullable();
            // $table->string('kode_referral', 20)->nullable();

            $table->rememberToken();
            $table->timestamps();
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
}
