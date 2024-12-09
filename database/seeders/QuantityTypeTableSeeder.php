<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuantityTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quantity_type')->insert([
            ['name' => 'Ud'],
            ['name' => 'Kg'],
            ['name' => 'L'],
            ['name' => 'cl'],
        ]);
    }
}
