<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('nome');
            $table->bigInteger('cpf')->unique();
            $table->bigInteger('rg');
            $table->bigInteger('cep');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->date('dt_nascimento');
            $table->bigInteger('telefone');
            $table->string('email');
            $table->integer('id_cargo')->references('id')->on('cargos')->onDelete('cascade');
            $table->integer('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->dateTime('dt_admissao');
            $table->dateTime('dt_demissao');
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
        Schema::dropIfExists('funcionarios');
    }
}
