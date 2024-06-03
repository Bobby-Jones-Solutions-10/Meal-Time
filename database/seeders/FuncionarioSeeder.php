<?php

namespace Database\Seeders;

use App\Models\funcionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        funcionario::create([
            'nome' => 'Bruno',
            'cargo' => 'balconista',
            'contato' => '12345',
            'CEP' => 85040420,
            'logradouro' => 'Rua Noemia Teixeira Silvério',
            'localidade' => 'Guarapuava',
            'bairro' => 'Vila Carli',
            'UF' => 'PR',
            'ibge' => '4109401',
            'numeroCasa' => 5
        ]);
    }
}
