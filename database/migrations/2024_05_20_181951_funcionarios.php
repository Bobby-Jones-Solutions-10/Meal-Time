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
        Schema::create('funcionarios',function(Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->string('cargo');
            $table->string('contato');
            $table->integer('CEP');
            $table->string('logradouro');
            $table->string('localidade');
            $table->string('bairro');
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
        Schema::dropIfExists('funcionarios');
    }
};
