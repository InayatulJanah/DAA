<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['name' => 'Inayatul', 'class' => '3A'],
            ['name' => 'Athirah', 'class' => '4B'],
            ['name' => 'Dini', 'class' => '4C'],
        ]);
    }
}
