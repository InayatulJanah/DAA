<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'student_id' => 1,
                'payment_type' => 'SPP',
                'amount' => 500000,
                'due_date' => '2024-12-15',
                'status' => 'belum_dibayar'
            ],
            [
                'student_id' => 2,
                'payment_type' => 'SPP',
                'amount' => 500000,
                'due_date' => '2024-12-15',
                'status' => 'menunggu'
            ],
            [
                'student_id' => 3,
                'payment_type' => 'SPP',
                'amount' => 500000,
                'due_date' => '2024-12-15',
                'status' => 'lunas'
            ]
        ]);
    }
}
