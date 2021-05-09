<?php

namespace App\Http\Controllers\Api;
use App\Models\ItemCatalogo;
use App\Http\Controllers\MasterController;
use Illuminate\Http\Request;

class ItemCatalogoController extends MasterController
{

    protected $model;

    public function __construct(ItemCatalogo $itemCatalogo)
    {
        $this->model = $itemCatalogo;
    }

    public function index(Request $request)
    {
        $data = $this->model::select('item_catalogo.*')
            ->where('id_catalogo', $request->id_catalogo)
            ->get();

        return response()->json($data);
    }

}
