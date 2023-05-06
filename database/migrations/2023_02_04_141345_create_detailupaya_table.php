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
        Schema::create('detailupaya', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nomorregis')->unsigned()->nullable();
            $table->date('tgl_upayalain')->nullable();
            $table->string('kegiatan_upayalain')->nullable();
            $table->string('hasil_upayalain')->nullable();
            $table->timestamps();
        });

        Schema::table('detailupaya', function($table) {
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
        Schema::dropIfExists('detailupaya');
    }
};
