<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [

        'nome',
        'telefone',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'uf'


    ];
}
