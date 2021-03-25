<?php

namespace App\Http\Controllers\Api;

use App\Models\CatalogoDespesa;
use App\Http\Controllers\MasterController;

class CatalogoDespesaController extends MasterController
{
    protected $model;

    public function __construct(CatalogoDespesa $catalogoDespesa)
    {
        $this->model = $catalogoDespesa;
    }
}
