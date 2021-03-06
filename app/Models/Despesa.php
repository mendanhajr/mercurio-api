<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'valor',
        'item_catalogo_id',
        'status',
        'mes_referencia',
        'ano_referencia',
    ];

    public function rules(){
        return [
            'valor' => 'required',
            'item_catalogo_id' => 'required',
            'status' => 'required',
            'mes_referencia' => 'required',
            'ano_referencia' => 'required',
        ];
    }

    public function itemCatalogoDespesas(){
        return $this->belongsTo(ItemCatalogo::class, 'item_catalogo_id');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    public function getValorAttribute($value){
        return number_format($value, 2, ',', '.');
    }
}
