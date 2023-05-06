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
        Schema::create('masterbuterdaftar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_bu')->nullable();
            $table->string('nama_bu')->nullable();
            $table->string('alamat_bu')->nullable();
            $table->string('nama_pimpinan')->nullable();
            $table->string('notelp_pimpinan')->nullable();
            $table->string('PIC')->nullable();
            $table->string('notelp_PIC')->nullable();
            $table->string('nama_RO_bu')->nullable();
            $table->string('longitude_bu')->nullable();
            $table->string('latitude_bu')->nullable();
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
        Schema::dropIfExists('masterbuterdaftar');
    }
};
