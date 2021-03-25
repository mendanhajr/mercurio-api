<?php

namespace App\Http\Controllers\Api;

use App\Models\Despesa;
use App\Http\Controllers\MasterController;

class DespesaController extends MasterController
{

    protected $model;

    public function __construct(Despesa $despesa)
    {
        $this->model = $despesa;
    }

    public function index()
    {
        $data = $this->model::select('despesas.*', 'cd.nome as nome_catalogo')
        ->join('catalogo_despesas as cd', 'cd.id', '=', 'despesas.catalogo_id')->paginate(10);

        return response()->json($data);
    }

    public function catalogoDespesas(){
        $data = $this->model->all();
        return response()->json($data);
    }
}
