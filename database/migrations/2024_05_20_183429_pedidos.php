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
        Schema::create('pedidos',function(Blueprint $table) {
            $table->id();
            $table->foreignId('pizzas_id');
            $table->foreignId('clientes_id');
            $table->decimal('preco',6,2);
            $table->char('tipo');
            $table->boolean('pronta')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
