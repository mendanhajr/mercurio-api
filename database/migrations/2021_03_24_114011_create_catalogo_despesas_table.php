<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogoDespesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_despesas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nome', 100);
            $table->integer('tipo_despesa_id')->unique();
            $table->boolean('situacao');
            $table->timestamps();
            $table->foreign('tipo_despesa_id')
                ->references('id')
                ->on('tipo_despesas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogo_despesas');
    }
}
