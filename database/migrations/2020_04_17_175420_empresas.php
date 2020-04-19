<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function(Blueprint $table) {
            $table->text('cnpj');
            $table->text('matriz_filial');
            $table->text('razao_social');
            $table->text('nome_fantasia');
            $table->text('situacao');
            $table->text('data_situacao');
            $table->text('motivo_situacao');
            $table->text('nm_cidade_exterior');
            $table->text('cod_pais');
            $table->text('nome_pais');
            $table->text('cod_nat_juridica');
            $table->text('data_inicio_ativ');
            $table->text('cnae_fiscal');
            $table->text('tipo_logradouro');
            $table->text('logradouro');
            $table->text('numero');
            $table->text('complemento');
            $table->text('bairro');
            $table->text('cep');
            $table->text('uf');
            $table->text('cod_municipio');
            $table->text('municipio');
            $table->text('ddd_1');
            $table->text('telefone_1');
            $table->text('ddd_2');
            $table->text('telefone_2');
            $table->text('ddd_fax');
            $table->text('num_fax');
            $table->text('email');
            $table->text('qualif_resp');
            $table->text('porte');
            $table->text('opc_simples');
            $table->text('data_opc_simples');
            $table->text('data_exc_simples');
            $table->text('opc_mei');
            $table->text('sit_especial');
            $table->text('data_sit_especial');
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
        Schema::drop('empresas');
    }
}
