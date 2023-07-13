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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->integer('id_penduduk');
            $table->string('jenis_surat');
            $table->string('nomor_surat')->nullable();
            $table->integer('status')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('keperluan')->nullable();
            $table->string('nama_kampus')->nullable();
            $table->string('alamat_kampus')->nullable();
            $table->string('mulai_hajatan')->nullable();
            $table->string('akhir_hajatan')->nullable();
            $table->string('tempat_hajatan')->nullable();
            $table->string('hiburan_hajatan')->nullable();
            $table->string('keperluan_tambahan')->nullable();
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
        Schema::dropIfExists('pengajuans');
    }
};
