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
        Schema::create('detailcanvasing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nomorregis')->unsigned()->nullable();
            $table->string('metode_canvasing')->nullable();
            $table->date('tanggal_canvasing')->nullable();
            $table->string('hasil_canvasing')->nullable();
            $table->string('jumlah_potensi_pekerja')->nullable();
            $table->string('jumlah_potensi_keluarga')->nullable();
            $table->string('tindak_lanjut')->nullable();
            $table->string('hasil_rekrutmen')->nullable();
            $table->timestamps();
        });

        Schema::table('detailcanvasing', function($table) {
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
        Schema::dropIfExists('detailcanvasing');
    }
};
