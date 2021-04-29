<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemCatalogo extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item_catalogo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'id_catalogo',
        'gerar_automatico',
    ];

    public function rules(){
        return [
            'nome' => 'required'
        ];
    }
}
