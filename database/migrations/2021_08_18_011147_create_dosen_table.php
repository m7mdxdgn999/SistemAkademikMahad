<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('kode_dosen')->primary();
            $table->string('nip');
            $table->string('nama_dosen');
            $table->string('kode_mabna');
            $table->foreign('kode_mabna')->references('kode_mabna')->on ('mabna')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->integer('no_hp_dosen')->length(20);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('dosen');
    }
}
