<?php

namespace Database\Seeders;

use App\Models\extra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        extra::create([
            'extra' => 'nada',
            'preco' => 0
        ]);
        extra::create([
            'extra' => 'bacon',
            'preco' => 0.35
        ]);
    }
}
