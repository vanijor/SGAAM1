<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('nome');
            $table->bigInteger('cpf')->unique();
            $table->bigInteger('rg');
            $table->integer('cep');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->date('dt_nascimento');
            $table->bigInteger('telefone');
            $table->string('email');
            $table->integer('id_plano')->references('id')->on('planos')->onDelete('cascade');
            $table->integer('id_modalidade')->references('id')->on('modalidades')->onDelete('cascade');
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
        Schema::dropIfExists('alunos');
    }
}
