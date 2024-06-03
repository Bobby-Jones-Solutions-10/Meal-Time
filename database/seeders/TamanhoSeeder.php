<?php

namespace Database\Seeders;

use App\Models\tamanho;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TamanhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tamanho::create(['tamanho' => 'Pequena','preco' => 1.00]);
        tamanho::create(['tamanho' => 'Média','preco' => 2.00]);
        tamanho::create(['tamanho' => 'Grande','preco' => 3.00]);
        tamanho::create(['tamanho' => 'Gigante','preco' => 4.00]);
    }
}