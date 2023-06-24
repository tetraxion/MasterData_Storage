<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan metode 'insert' pada DB facade untuk menambahkan data ke dalam tabel 'employees'
        DB::table('employees')->insert([
            [
                'firstname' => 'Purnama', // Nama depan 'Purnama'
                'lastname' => 'Anaking', // Nama belakang 'Anaking'
                'email'=> 'purnama.anaking@gmail.com', // Email 'purnama.anaking@gmail.com'
                'age' => 20, // Usia 20 tahun
                'position_id' => 1 // ID posisi 1
            ],
            [
                'firstname' => 'Adzanil', // Nama depan 'Adzanil'
                'lastname' => 'Rachmadhi', // Nama belakang 'Rachmadhi'
                'email'=> 'adzanil.rachmadhi@gmail.com', // Email 'adzanil.rachmadhi@gmail.com'
                'age' => 25, // Usia 25 tahun
                'position_id' => 2 // ID posisi 2
            ],
            [
                'firstname' => 'Berlian', // Nama depan 'Berlian'
                'lastname' => 'Rahmy', // Nama belakang 'Rahmy'
                'email'=> 'berlian.rahmy@gmail.com', // Email 'berlian.rahmy@gmail.com'
                'age' => 23, // Usia 23 tahun
                'position_id' => 3 // ID posisi 3
            ],
        ]);
    }
}
