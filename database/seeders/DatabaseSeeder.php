<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PositionSeeder::class, // Memanggil seeder PositionSeeder
            EmployeeSeeder::class, // Memanggil seeder EmployeeSeeder
            AdminSeeder::class // Memanggil seeder AdminSeeder
        ]);

    }
}
