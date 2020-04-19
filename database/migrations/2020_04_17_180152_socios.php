<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Socios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function(Blueprint $table) {
            $table->text('cnpj');
            $table->text('tipo_socio');
            $table->text('nome_socio');
            $table->text('cnpj_cpf_socio');
            $table->text('cod_qualificacao');
            $table->text('data_entrada');
            $table->text('cod_pais_ext');
            $table->text('nome_pais_ext');
            $table->text('cpf_repres');
            $table->text('nome_repres');
            $table->text('cod_qualif_repres');
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
        Schema::drop('socios');
    }
}
