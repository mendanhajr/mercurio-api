<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Despesa;
use Illuminate\Support\Facades\DB;
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
        $data = $this->model::query();

        $data->select(
            'despesas.*',
            'cd.nome as nome_catalogo',
            'ic.nome',
            DB::raw('SUM(valor) AS vlr')
        )
        ->join('item_catalogo as ic', 'ic.id', '=', 'despesas.item_catalogo_id')
        ->join('catalogo_despesas as cd', 'cd.id', '=', 'ic.id_catalogo');

        if(isset($request->ano_referencia) && !empty($request->ano_referencia)){
            $data = $data->where('despesas.ano_referencia', '=', (int) $request->ano_referencia);
        }
        if(isset($request->mes_referencia) && !empty($request->mes_referencia)){
            $data = $data->where('despesas.mes_referencia', '=', (int) $request->mes_referencia);
        }
        $data = $data->groupBy('despesas.id', 'cd.nome', 'ic.nome')->orderBy('despesas.id', 'desc')->get();

        return response()->json(
            [
                'result' => $data,
                'valorTotal' => number_format($data->sum('vlr'), 2, ',', '.')
            ]
        );
    }

    public function catalogoDespesas(){
        $data = $this->model->all();
        return response()->json($data);
    }
}
