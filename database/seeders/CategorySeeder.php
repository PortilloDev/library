<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
           [
            'id'   => 1,
            'name' => "Programación",
            'created_at' => date("Y-m-d H:i:s"),
           ],
           [
               'id'   => 2,
               'name' => "Novela Historica",
               'created_at' => date("Y-m-d H:i:s"),
           ],
           [
               'id'   => 3,
               'name' => "Deporte",
               'created_at' => date("Y-m-d H:i:s"),
           ],
           [
               'id'   => 4,
               'name' => "Ciencias",
               'created_at' => date("Y-m-d H:i:s"),
           ],
        ]);
    }
}
