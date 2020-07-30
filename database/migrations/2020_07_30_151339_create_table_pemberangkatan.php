<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePemberangkatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pemberangkatan', function (Blueprint $table) {
            $table->id('id_pemberangkatan');
            $table->bigInteger('nama_bus')->unsigned()->index();
            $table->bigInteger('sopir')->unsigned()->index();
            $table->bigInteger('instansi')->unsigned()->index();
            $table->bigInteger('berangkat')->unsigned()->index();
            $table->bigInteger('tujuan')->unsigned()->index();
            $table->string('jam_berangkat');
            $table->string('jam_tiba');

            $table->foreign('nama_bus')->references('id_bus')->on('table_bus');
            $table->foreign('sopir')->references('ktp')->on('table_sopir');
            $table->foreign('instansi')->references('id_instansi')->on('table_instansi');
            $table->foreign('berangkat')->references('id_kota')->on('table_kota');
            $table->foreign('tujuan')->references('id_kota')->on('table_kota');



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
        Schema::dropIfExists('table_pemberangkatan');
    }
}
