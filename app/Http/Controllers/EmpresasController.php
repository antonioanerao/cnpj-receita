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

    public function index($cnpj)
    {
        $empresas = Empresa::where('cnpj', '=', $cnpj)->get();
        return response()->json($empresas, 200);
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
