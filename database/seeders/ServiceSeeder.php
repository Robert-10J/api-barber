<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name_service' => 'Corte de Cabello Mujer',
            'price' => 90.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('services')->insert([
            'name_service' => 'Corte de Cabello Hombre',
            'price' => 80.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name_service' => 'Corte de Cabello Niño',
            'price' => 60.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name_service' => 'Peinado Mujer',
            'price' => 80.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name_service' => 'Peinado Hombre',
            'price' => 60.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('services')->insert([
            'name_service' => 'Peinado Niño',
            'price' => 60.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name_service' => 'Corte de Barba',
            'price' => 60.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name_service' => 'Tinte Mujer',
            'price' => 300.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name_service' => 'Uñas',
            'price' => 400.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name_service' => 'Lavado de Cabello',
            'price' => 60.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('services')->insert([
            'name_service' => 'Tratamiento Capilar',
            'price' => 150.9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
