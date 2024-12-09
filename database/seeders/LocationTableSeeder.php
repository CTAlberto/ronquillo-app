<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('location')->insert([
            ['name' => 'Despensa'],
            ['name' => 'Nevera'],
            ['name' => 'Congelador Nevera'],
            ['name' => 'Armario abajo'],
            ['name' => 'Trastero'],
            ['name' => 'Cajonera'],
            ['name' => 'Congelador trastero'],
            ['name' => 'Armario Padres'],
            ['name' => 'Somier 23'],
            ['name' => 'Somier padres'],
            ['name' => 'Armario abajo'],
        ]);
    }
}
