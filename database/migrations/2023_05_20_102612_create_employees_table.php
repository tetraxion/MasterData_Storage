<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Membuat sebuah kelas anonim yang extends dari kelas Migration
return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        // Buat tabel baru bernama 'employees' di dalam database
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom 'id' dengan auto-incrementing sebagai primary key
            $table->string('firstname'); // Menambahkan kolom 'firstname' dengan tipe data string
            $table->string('lastname')->nullable(); // Menambahkan kolom 'lastname' dengan tipe data string (opsional)
            $table->string('email')->unique(); // Menambahkan kolom 'email' dengan tipe data string yang harus unik
            $table->integer('age'); // Menambahkan kolom 'age' dengan tipe data integer
            $table->foreignId('position_id')->constrained(); // Menambahkan kolom 'position_id' sebagai foreign key yang terkait dengan tabel 'positions'
            $table->timestamps(); // Menambahkan kolom 'created_at' dan 'updated_at' untuk melacak timestamp
        });
    }

    /**
     * Revert migrasi.
     */
    public function down(): void
    {
        // Menghapus tabel 'employees' dari database
        Schema::dropIfExists('employees');
    }
};
