<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectos', function (Blueprint $table) {
            $table->id();
            $table->string('num_documento')->nullable();
            $table->text('descricao')->nullable();
            $table->integer('divulga')->default(1);
            $table->enum('estado', ['perdido', 'roubado', 'achado', 'fechado'])->default('perdido');
            
            $table->bigInteger('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
            
            $table->bigInteger('localizacao_id')->unsigned();
            $table->foreign('localizacao_id')->references('id')->on('localizacaos')->onDelete('cascade');
           
            $table->bigInteger('tipo_objecto_id')->unsigned();
            $table->foreign('tipo_objecto_id')->references('id')->on('tipo_objectos')->onDelete('cascade');
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
        Schema::dropIfExists('objectos');
    }
}
