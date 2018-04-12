<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('pagamento');
            $table->string('mes_referente');
            $table->date('dt_vencimento');
            $table->double('vl_mensalidade');
            $table->integer('id_aluno')->references('id')->on('alunos')->onDelete('cascade');
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
        Schema::dropIfExists('pagamentos');
    }
}
