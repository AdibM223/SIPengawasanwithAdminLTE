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
        Schema::create('masterregisbu', function (Blueprint $table) {
            $table->bigIncrements('nomorregis');
            $table->string('nama_bu_regis')->nullable();
            $table->string('alamat_bu_regis')->nullable();
            $table->string('notelp_bu_regis')->nullable();
            $table->string('PJ_regis')->nullable();
            $table->string('notelp_PJ_regis')->nullable();
            $table->string('nama_RO_regis')->nullable();
            $table->string('jumlah_karyawan_regis')->nullable();
            $table->string('longitude_regis')->nullable();
            $table->string('latitude_regis')->nullable();
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
        Schema::dropIfExists('masterregisbu');
    }
};
