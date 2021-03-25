<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MasterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());
        $params = $request->all();
        $data = $this->model->create($params);

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $despesa = $this->model->find($id);
        if(!$despesa){
            return response()->json(['error' => 'Nenhuma despesa encontrada'], 404);
        }
        return response()->json($despesa);
    }

    public function update(Request $request, $id)
    {
        $despesa = $this->model->find($id);
        if(!$despesa){
            return response()->json(['error' => 'Despesa não encontrada'], 404);
        }
        $despesa->update($request->all());
        return response()->json($despesa);
    }

    public function destroy($id)
    {
        $despesa = $this->model->find($id);
        if(!$despesa){
            return response()->json(['error' => 'Despesa não encontrada'], 404);
        }
        $despesa->delete();
        return response()->json(['success' => 'Despesa excluída com sucesso']);
    }
}
