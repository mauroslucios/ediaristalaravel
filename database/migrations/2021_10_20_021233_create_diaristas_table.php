<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaristas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo', 30);
            $table->char('cpf', 14);
            $table->string('email', 50);
            $table->string('telefone', 14);
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('bairro', 30);
            $table->string('cidade', 30);
            $table->string('complemento', 50)->nullable();
            $table->char('cep', 8);
            $table->char('estado', 2);
            $table->integer('codigo_ibge');
            $table->string('foto_usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diaristas');
    }
}
