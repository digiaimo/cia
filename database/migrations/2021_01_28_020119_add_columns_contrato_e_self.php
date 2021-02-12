<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsContratoESelf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selfs', function (Blueprint $table) {
            //$table->unsignedBigInteger('contrato_social_id')->after('faturamento_ultimo_mes');
            $table->unsignedBigInteger('informacoes_basicas_id')->after('caminho_arquivo');
            $table->foreign('informacoes_basicas_id')->references('id')->on('informacoes_basicas')->onDelete('cascade');

            //$table->unsignedBigInteger('self_id')->after('contrato_social_id');
            //$table->foreign('contrato_social_id')->references('id')->on('contratos_sociais')->onDelete('cascade');
            //$table->foreign('self_id')->references('id')->on('selfs')->onDelete('cascade');
        });

        Schema::table('contratos_sociais', function (Blueprint $table) {
            $table->unsignedBigInteger('informacoes_basicas_id')->after('caminho_arquivo');
            $table->foreign('informacoes_basicas_id')->references('id')->on('informacoes_basicas')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selfs', function (Blueprint $table) {
            $table->dropForeign('selfs_informacoes_basicas_id_foreign');
            //$table->dropForeign('informacoes_basicas_self_id_foreign');
            $table->dropColumn('informacoes_basicas_id');
            //$table->dropColumn('self_id');
        });

        Schema::table('contratos_sociais', function (Blueprint $table) {
            $table->dropForeign('contratos_sociais_informacoes_basicas_id_foreign');
            //$table->dropForeign('informacoes_basicas_self_id_foreign');
            $table->dropColumn('informacoes_basicas_id');
            //$table->dropColumn('self_id');
        });
    }
}
