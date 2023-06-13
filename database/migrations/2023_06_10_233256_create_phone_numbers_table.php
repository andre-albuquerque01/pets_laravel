<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phone_numbers', function (Blueprint $table) {
            $table->id('id_phone')->comment('Contem a chave primaria da tabela');
            $table->smallInteger('ddi')->comment('Contem o ddi (codigo) do país');
            $table->smallInteger('ddd')->comment('Contem o ddd (codigo) do estado');
            $table->string('number', 15)->comment('Contem o numero do usuário');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_numbers');
    }
};
