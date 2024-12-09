<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Camiseta blanca',
                'type_id' => 1, // Ropa
                'location_id' => 8, // Armario Padres
                'quantity' => 5,
                'quantity_type_id' => 1, // Ud
            ],
            [
                'name' => 'Zapatos deportivos',
                'type_id' => 2, // Calzado
                'location_id' => 8, // Armario Padres
                'quantity' => 2,
                'quantity_type_id' => 1, // Ud
            ],
            [
                'name' => 'Detergente para ropa',
                'type_id' => 3, // Limpieza
                'location_id' => 4, // Armario abajo
                'quantity' => 1,
                'quantity_type_id' => 2, // Kg
            ],
            [
                'name' => 'Leche',
                'type_id' => 4, // Perecederos
                'location_id' => 2, // Nevera
                'quantity' => 2,
                'quantity_type_id' => 3, // L
            ],
            [
                'name' => 'Conserva de atún',
                'type_id' => 5, // No perecederos
                'location_id' => 1, // Despensa
                'quantity' => 10,
                'quantity_type_id' => 1, // Ud
            ],
            [
                'name' => 'Martillo',
                'type_id' => 6, // Herramientas
                'location_id' => 5, // Trastero
                'quantity' => 1,
                'quantity_type_id' => 1, // Ud
            ],
            [
                'name' => 'Croquetas para perro',
                'type_id' => 7, // Perro
                'location_id' => 1, // Despensa
                'quantity' => 15,
                'quantity_type_id' => 2, // Kg
            ],
            [
                'name' => 'Pollo congelado',
                'type_id' => 4, // Perecederos
                'location_id' => 3, // Congelador Nevera
                'quantity' => 3,
                'quantity_type_id' => 2, // Kg
            ],
            [
                'name' => 'Camiseta negra',
                'type_id' => 1, // Ropa
                'location_id' => 8, // Armario Padres
                'quantity' => 4,
                'quantity_type_id' => 1, // Ud
            ],
            [
                'name' => 'Caja de clavos',
                'type_id' => 6, // Herramientas
                'location_id' => 5, // Trastero
                'quantity' => 500,
                'quantity_type_id' => 1, // Ud
            ],
        ]);
    }
}
