<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class temans extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('temans')->insert([
            'nama'=>$faker->name,
            'alamat'=>'Jl. Tukad Pakerisan',
            'kota'=>'Denpasar',
            'telp'=>'0188888',
        ]);
    }
}
