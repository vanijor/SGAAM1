<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_professor');
            $table->string('nm_professor');
            $table->integer('registro_geral_professor');
            $table->integer('cpf_professor');
            $table->date('dt_nascimento_professor');
            $table->string('nm_endereco');
            $table->string('nm_email_professor');
            $table->integer('cd_telefone_professor');
            $table->string('nm_modalidade');
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
        Schema::dropIfExists('professors');
    }
}
