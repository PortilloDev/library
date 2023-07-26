<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platforms')->insert([
            [
                'id'   => 1,
                'name' => "Udemy",
                'url' => 'https://www.udemy.com/',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'   => 2,
                'name' => "Codely",
                'url' => 'https://codely.com/',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'   => 3,
                'name' => "Platzi",
                'url' => 'https://platzi.com/home',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id'   => 4,
                'name' => "Youtube",
                'url' => 'https://www.youtube.com/',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
