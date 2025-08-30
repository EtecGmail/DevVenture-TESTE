<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_respostas_professor', function (Blueprint $table) {
            $table->id('id_resposta_professor');
            $table->unsignedBigInteger('id_pergunta_aluno');
            $table->string('resposta')->nullable();
            $table->timestamps();

            $table->foreign('id_pergunta_aluno')->references('id_pergunta_aluno')->on('table_perguntas_aluno')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
