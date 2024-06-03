<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'Luiz','email'  => 'luiz@test.com','password'   => bcrypt('1234')]);
        User::create(['name' => 'Leo','email'   => 'leo@test.com','password'    => bcrypt('1234')]);
        User::create(['name' => 'Bruno','email' => 'bruno@test.com','password'  => bcrypt('1234')]);
        User::create(['name' => 'Tiago','email' => 'tiago@test.com','password'  => bcrypt('1234')]);
        User::create(['name' => 'Rafa','email'  => 'rafa@test.com','password'   => bcrypt('1234')]);
    }
}
