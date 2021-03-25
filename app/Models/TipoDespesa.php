<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDespesa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
    ];

    public function rules(){
        return [
          'nome' => 'required'
        ];
    }
}
