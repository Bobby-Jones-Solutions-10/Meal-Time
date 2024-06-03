<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamanho extends Model
{
    use HasFactory;

    protected $fillable = [
        'tamanho',
        'preco'
    ];
}
