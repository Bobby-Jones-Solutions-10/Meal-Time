<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cliente::create([
            'nome' => 'tiago pitanga 10',
            'CPF' => '1234567891',
            'contato' => '1234',
            'CEP' => '85200306',
            'logradouro' => '',
            'bairro' => '',
            'localidade' => 'Pitanga',
            'UF' => 'PR',
            'ibge' => 123,
            'numeroCasa' => 2056
        ]);
    }
}
