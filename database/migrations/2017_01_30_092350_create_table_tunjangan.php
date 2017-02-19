<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTunjangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunjangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_tunjangan')->unique();
            
            $table->integer('jabatan_id')->unsigned();
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->OnDelete('cascade')->OnUpdate('cascade');

            $table->integer('golongan_id')->unsigned();
            $table->foreign('golongan_id')->references('id')->on('golongan')->OnDelete('cascade')->OnUpdate('cascade');

            $table->string('status');
            $table->integer('jumlah_anak');
            $table->integer('besaran_uang');
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
        Schema::dropIfExists('tunjangan');
    }
}
