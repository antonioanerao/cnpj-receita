<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexTableEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresas', function(Blueprint $table)
        {
            $table->index('cnpj', 'ix_empresas_cnpj');
        });

        Schema::table('empresas', function(Blueprint $table)
        {
            $table->index('cnpj', 'ix_empresas_raiz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('index_table_empresas');
    }
}
