<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cargo',
        'contato',
        'CEP',
        'logradouro',
        'localidade',
        'bairro',
        'UF',
        'ibge',
        'numeroCasa'
    ];
}
