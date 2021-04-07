<?php
namespace App\Http\Controllers\Api;

use App\Models\TipoDespesa;
use App\Http\Controllers\MasterController;

class TipoDespesaController extends MasterController
{
    protected $model;

    public function __construct(TipoDespesa $tipoDespesa)
    {
        $this->model = $tipoDespesa;
    }
}

