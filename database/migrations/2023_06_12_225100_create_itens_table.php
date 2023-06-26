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
        Schema::create('itens', function (Blueprint $table) {
            $table->id('id_itens')->comment('Contem a chave primaria');
            $table->text('title')->comment('Contem o titulo do iten');
            $table->text('description')->comment('Contem a descrição do iten');
            $table->double('price')->comment('Contem a preço do iten');
            $table->string('place', 100)->comment('Contem o local do iten');
            $table->string('status_itens', 2)->comment('Contem o status do iten');

            $table->unsignedBigInteger('id_users')->comment('Contem a chave estrangeira de usuario');
            $table->foreign('id_users')->references('id_users')->on('users');
            $table->unsignedBigInteger('id_category')->comment('Contem a chave estrangeira de categoria');
            $table->foreign('id_category')->references('id_category')->on('categorys');
            $table->unsignedBigInteger('id_image')->comment('Contem a chave estrangeira de image');
            $table->foreign('id_image')->references('id_image')->on('images');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens');
    }
};
