<?php

namespace Database\Seeders;

use App\Models\sabor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sabor::create([
            'sabor' => 'calabreza',
            'preco' => 3.35
        ]);
    }
}
