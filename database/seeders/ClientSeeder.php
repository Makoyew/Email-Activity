<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Mueblas',
                'first_name' => 'Mark Lister',
                'middle_name' => 'Tero',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2002-03-13',
                'phone_number' => '09308239965',
                'email' => 'marklistermueblas3@gmail.com',
                'initial_deposit' => 13000
            ],
            [
                'last_name' => 'Escobar',
                'first_name' => 'Pablo',
                'middle_name' => 'Lang',
                'address' => 'There, India',
                'birth_date' => '1947-01-24',
                'phone_number' => '09124466088',
                'email' => 'pabloescobar4@gmail.com',
                'initial_deposit' => 20000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
