<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'CPF',
        'contato',
        'CEP',
        'logradouro',
        'bairro',
        'localidade',
        'UF',
        'ibge',
        'numeroCasa'
    ];
}
