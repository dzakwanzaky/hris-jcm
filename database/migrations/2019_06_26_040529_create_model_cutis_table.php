<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_cutis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('id_user');
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');
            $table->string('total')->nullable();
            $table->string('keterangan');
            $table->string('status')->nullable();
            $table->string('tanggung_jawab');
            $table->string('telepon');
            $table->string('alasan')->nullable();
            $table->string('file')->nullable();            
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
        Schema::dropIfExists('model_cutis');
    }
}
