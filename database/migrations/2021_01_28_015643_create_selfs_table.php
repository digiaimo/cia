<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selfs', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('informacoes_basicas_id');
            $table->string('caminho_arquivo');
            $table->timestamps();
            $table->softDeletes();

            //$table->foreign('informacoes_basicas_id')->on('id')->references('informacoes_basicas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selfs');
    }
}
