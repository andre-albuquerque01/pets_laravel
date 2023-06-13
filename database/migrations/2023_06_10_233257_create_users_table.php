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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_users')->comment('Contem a chave primaria');
            $table->string('first_name')->comment('Contem o primeiro nome do usuario');
            $table->string('last_name')->comment('Contem o sobrenome do usuario');
            $table->string('email')->unique()->comment('Contem o email do usuario');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('Contem a senha do usuário');
            $table->string('status', 2)->comment("Contem se o usuário estpa ativo ou não");
            $table->char('term_of_concience', 1)->comment('Contem o termo de aceite se o usuário aceitou');

            $table->smallInteger('ddd')->comment('Contem o ddd (codigo) do estado');
            $table->string('number', 15)->comment('Contem o numero do usuário');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
