<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexTableSocios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('socios', function(Blueprint $table)
        {
            $table->index('cnpj', 'ix_socios_cnpj');
        });

        Schema::table('socios', function(Blueprint $table)
        {
            $table->index('cnpj_cpf_socio', 'ix_socios_cpf_cnpj');
        });

        Schema::table('socios', function(Blueprint $table)
        {
            $table->index('nome_socio', 'ix_socios_nome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('index_table_socios');
    }
}
