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
                'last_name' => 'Sacedon',
                'first_name' => 'Christian James',
                'middle_name' => 'Lang',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '1947-01-24',
                'phone_number' => '09124466088',
                'email' => 'christiansacedon3@gmail.com',
                'initial_deposit' => 20000
            ],
            [
                'last_name' => 'Mejias',
                'first_name' => 'Francis Michael',
                'middle_name' => 'Pogi',
                'address' => 'Inabanga, Bohol',
                'birth_date' => '2003-07-08',
                'phone_number' => '09345768321',
                'email' => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit' => 12000
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Rosalino',
                'middle_name' => 'Evry',
                'address' => 'Bakong, Tubigon, Bohol',
                'birth_date' => '2001-09-05',
                'phone_number' => '09786562133',
                'email' => 'fross0988@gmail.com',
                'initial_deposit' => 20000
            ],
            [
                'last_name' => 'Pongase',
                'first_name' => 'John Ivan',
                'middle_name' => 'Cute',
                'address' => 'Cabulijan, Tubigon, Bohol',
                'birth_date' => '1817-08-14',
                'phone_number' => '09123453216',
                'email' => 'sumipo231@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Batausa',
                'first_name' => 'Nathaniel',
                'middle_name' => 'Roba',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2002-11-16',
                'phone_number' => '09872134579',
                'email' => 'nathanielbatausafgo@gmail.com',
                'initial_deposit' => 20000
            ],
            [
                'last_name' => 'Villarmia',
                'first_name' => 'Ace Joy',
                'middle_name' => 'Mejares',
                'address' => 'Batasan, Tubigon, Bohol',
                'birth_date' => '1780-01-12',
                'phone_number' => '09465312456',
                'email' => 'acejoygwapo123@gmail.com',
                'initial_deposit' => 20000
            ],
            [
                'last_name' => 'Sacedon',
                'first_name' => 'Christian James',
                'middle_name' => 'Lang',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '1947-01-24',
                'phone_number' => '09124466088',
                'email' => 'christiansacedon3@gmail.com',
                'initial_deposit' => 20000
            ],
            [
                'last_name' => 'Wolfrod',
                'first_name' => 'Shin',
                'middle_name' => 'Rulona',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-02-01',
                'phone_number' => '09636344766',
                'email' => 'sacedonschristian71@gmail.com',
                'initial_deposit' => 20000
            ],
            [
                'last_name' => 'Mueblas',
                'first_name' => 'Juliefa',
                'middle_name' => 'Tero',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '1993-09-01',
                'phone_number' => '09468312416',
                'email' => 'juliefamueblas1984@gmail.com',
                'initial_deposit' => 29000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
