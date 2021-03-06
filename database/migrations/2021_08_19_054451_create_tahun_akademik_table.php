<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTahunAkademikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahun_akademik', function (Blueprint $table) {
            $table->string('kode_tahun_akademik')->primary();
            $table->string('tahun_akademik');
            // $table->enum('status', ['aktif', 'tidak aktif']);
            $table->string('status');
            $table->date('tanggal_awal_pembinaan');
            $table->date('tanggal_akhir_pembinaan');
            $table->date('tanggal_awal_uts');
            $table->date('tanggal_akhir_uts');
            $table->date('tanggal_awal_uas');
            $table->date('tanggal_akhir_uas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tahun_akademik');
    }
}
