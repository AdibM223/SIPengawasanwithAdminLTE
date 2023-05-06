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
        Schema::create('ajuansertif', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_bu')->nullable();
            $table->string('no_surat')->nullable();
            $table->date('tgl_surat')->nullable();
            $table->string('nama_file')->nullable();
            $table->string('nomor_sertif')->nullable();
            $table->date('tgl_cetak')->nullable();
            $table->string('periode_sertif')->nullable();
            $table->string('jumlah_peserta')->nullable();
            $table->string('jumlah_ISAT')->nullable();
            $table->date('tanggal_diserahkan')->nullable();
            $table->timestamps();
        });

        // Schema::table('ajuansertif', function($table) {
        //     $table->foreign('kode_bu')->references('kode_bu')->on('masterbuterdaftar');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajuansertif');
    }
};
