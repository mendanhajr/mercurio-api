<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Despesa;
use App\Http\Controllers\MasterController;

class DespesaController extends MasterController
{

    protected $model;

    public function __construct(Despesa $despesa)
    {
        $this->model = $despesa;
    }

    public function index(Request $request)
    {
        $data = $this->model::select('despesas.*', 'cd.nome as nome_catalogo')
        ->join('catalogo_despesas as cd', 'cd.id', '=', 'despesas.catalogo_id');

        return response()->json($data);
    }

    public function catalogoDespesas(){
        $data = $this->model->all();
        return response()->json($data);
    }
}
