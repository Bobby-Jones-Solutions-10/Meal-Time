<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $db = new FuncionarioSeeder();
        $db->run();

        $db = new UserSeeder();
        $db->run();

        $db = new ClienteSeeder();
        $db->run();

        
    }
}
