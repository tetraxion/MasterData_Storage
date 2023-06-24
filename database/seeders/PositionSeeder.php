<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan metode 'insert' pada DB facade untuk menambahkan data ke dalam tabel 'positions'
        DB::table('positions')->insert([
            [
                'code' => 'FE', // Kode posisi 'FE'
                'name' => 'Front End Developer', // Nama posisi 'Front End Developer'
                'description' => 'Front End Developer' // Deskripsi posisi 'Front End Developer'
            ],
            [
                'code' => 'BE', // Kode posisi 'BE'
                'name' => 'Back End Developer', // Nama posisi 'Back End Developer'
                'description' => 'Back End Developer' // Deskripsi posisi 'Back End Developer'
            ],
            [
                'code' => 'SA', // Kode posisi 'SA'
                'name' => 'System Analist', // Nama posisi 'System Analist'
                'description' => 'System Analist' // Deskripsi posisi 'System Analist'
            ],
        ]);
    }
}
