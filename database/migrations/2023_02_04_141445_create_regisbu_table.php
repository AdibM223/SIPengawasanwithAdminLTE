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
        Schema::create('regisbu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nomorregis')->unsigned()->nullable();
            $table->string('nama_bu_regis')->nullable();
            $table->string('jumlah_karyawan_regis')->nullable();
            $table->datetime('tgl_suratpernyataan')->nullable();
            $table->string('dokumen_pendukung')->nullable();
            $table->datetime('tgl_pemeriksaan')->nullable();
            $table->string('nama_pemeriksa')->nullable();
            $table->string('hasil_pemeriksaan')->nullable();
            $table->datetime('tgl_SPHP')->nullable();
            $table->datetime('tgl_surat_teguranI')->nullable();
            $table->datetime('tgl_surat_teguranII')->nullable();
            $table->datetime('tgl_sanksi_administratif')->nullable();
            $table->string('status_tahapcanvasing')->nullable();
            $table->string('status_tahap1')->nullable();
            $table->string('status_tahap2')->nullable();
            $table->string('status_tahap3')->nullable();
            $table->string('status_tahap4')->nullable();
            $table->string('status_tahap5')->nullable();
            $table->string('status_tahapupayalain')->nullable();
            $table->string('status_kepatuhan')->nullable();

            $table->timestamps();
        });

        Schema::table('regisbu', function($table) {
            $table->foreign('nomorregis')->references('nomorregis')->on('masterregisbu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regisbu');
    }
};
