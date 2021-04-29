<?php

namespace App\Http\Controllers\Api;
use App\Models\ItemCatalogo;
use App\Http\Controllers\MasterController;

class ItemCatalogoController extends MasterController
{

    protected $model;

    public function __construct(ItemCatalogo $itemCatalogo)
    {
        $this->model = $itemCatalogo;
    }

}
