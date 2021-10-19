<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->unsignedBigInteger('id_petugas');
            $table->unsignedBigInteger('nisn');
            $table->date('tanggal_bayar');
            $table->integer('bulan_spp');
            $table->integer('tahun_spp');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
            $table->foreign('nisn')->references('nisn')->on('siswa');
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
        Schema::dropIfExists('pembayaran');
    }
}
