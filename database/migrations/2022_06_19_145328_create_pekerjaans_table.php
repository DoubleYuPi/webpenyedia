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
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('pekerjaan');
            $table->date('tanggal');
            $table->string('lokasi');
            $table->string('jenis_pekerjaan');
            $table->float('hps');
            $table->float('nilai_kontrak');
            $table->float('lati');
            $table->float('longi');
            $table->string('gambar');
            $table->foreignId('penyedia_id');
            $table->string('bahp')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('user_id');
            $table->float('nilai_1')->default(0.0);
            $table->float('nilai_2')->default(0.0);
            $table->float('nilai_3')->default(0.0);
            $table->float('nilai_4')->default(0.0);
            $table->float('nilai_total')->default(0.0);
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
        Schema::dropIfExists('pekerjaans');
    }
};
