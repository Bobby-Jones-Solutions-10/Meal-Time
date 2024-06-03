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
        Schema::create('clientes',function(Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('CPF',11);
            $table->string('contato');
            $table->string('CEP');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('localidade');
            $table->string('UF');
            $table->integer('ibge');
            $table->integer('numeroCasa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
