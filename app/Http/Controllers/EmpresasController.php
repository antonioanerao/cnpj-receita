<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * @var Empresa
     */
    private $empresa;

    public function __construct(Empresa $empresa)
    {
        //$this->middleware('auth');
        $this->empresa = $empresa;
    }

    public function index($cnpj, $tipo)
    {
        $empresas = Empresa::where('cnpj', '=', $cnpj)->get();
        if($tipo == 'empresa')
        {
            return response()->json($empresas, 200);
        }
        if($tipo == 'socios')
        {
            return response()->json($empresas[0]->socios(), 200);
        }
        else
        {
            return response()->json('O tipo informado é inválido', 200);
        }
    }

    public function store(Request $request)
    {
        $empresa = Empresa::where('cnpj', '=', $request->input('cnpj'))->get();
        return view('empresas.buscar', compact('empresa'));
    }

    public function buscar()
    {
        return view('empresas.buscar');
    }
}
