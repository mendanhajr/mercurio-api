<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoDespesa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'tipo_despesa_id',
        'situacao',
    ];

    public function rules(){
        return [
            'nome'  => 'required',
            'tipo_despesa_id'  => 'required',
            'situacao'  => 'required',
        ];
    }
}
