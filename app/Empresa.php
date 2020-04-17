<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresas";

    public function socios()
    {
        return $this->hasMany(Socio::class, 'cnpj', 'cnpj')->get();
    }

    public function getSocios($cnpj)
    {
        return Empresa::select
        (
            "empresas.cnpj as cnpj_empresa", 'empresas.matriz_filial', 'empresas.razao_social', 'empresas.nome_fantasia',
            'empresas.situacao as situacao_empresa', 'empresas.data_situacao as data_situacao_empresa',
            'empresas.motivo_situacao as empresa_motivo_situacao', 'empresas.cod_nat_juridica', 'empresas.data_inicio_ativ',

            'socios.nome_socio'
        )
            ->distinct('cnpj_empresa', 'socios.nome_socio', 'empresas.razao_social', 'empresas.nome_fantasia')
            ->join('socios', 'socios.cnpj', 'empresas.cnpj')
            ->join('cnaes_secundarios', 'empresas.cnpj', 'cnaes_secundarios.cnpj')
            ->where('empresas.cnpj', '=', $cnpj)
            ->get();
    }
}
