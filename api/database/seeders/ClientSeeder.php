<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        Client::insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cpf' => rand(1000000000,9999999999),
            'gender' => rand(0,1)
        ]);
        
    }
}
