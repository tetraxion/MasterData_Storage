<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Membuat sebuah kelas anonim yang extends dari kelas Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Buat tabel baru bernama 'positions' di dalam database
        Schema::create('positions', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom 'id' dengan auto-incrementing sebagai primary key
            $table->string('code'); // Menambahkan kolom 'code' dengan tipe data string
            $table->string('name'); // Menambahkan kolom 'name' dengan tipe data string
            $table->string('description'); // Menambahkan kolom 'description' dengan tipe data string
            $table->timestamps(); // Menambahkan kolom 'created_at' dan 'updated_at' untuk melacak timestamp
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'positions' dari database
        Schema::dropIfExists('positions');
    }
};
