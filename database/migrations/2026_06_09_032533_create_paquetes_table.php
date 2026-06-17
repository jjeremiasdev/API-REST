<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paquete', function (Blueprint $table) {
            $table->id(); // INT PRIMARY KEY, AUTO_INCREMENT
            $table->string('codigo', 30)->unique(); // VARCHAR(30) NOT NULL, UNIQUE
            $table->string('destinatario', 100); // VARCHAR(100) NOT NULL
            $table->date('fecha_ingreso'); // DATE NOT NULL
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paquete');
    }
};