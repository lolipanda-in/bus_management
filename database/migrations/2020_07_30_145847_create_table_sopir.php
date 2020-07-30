<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSopir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_sopir', function (Blueprint $table) {
            $table->id('ktp');
            $table->string('nama');
            $table->string('alamat');
            $table->bigInteger('id_kota')->unsigned()->index();
            $table->timestamps();

            $table->foreign('id_kota')->references('id_kota')->on('table_kota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_sopir');
    }
}
