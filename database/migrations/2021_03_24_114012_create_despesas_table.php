<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor', 8, 2);
            $table->integer('catalogo_id');
            $table->enum('status', ['A', 'P']);
            $table->tinyInteger('mes_referencia');
            $table->tinyInteger('ano_referencia');
            $table->timestamps();
            $table->foreign('catalogo_id')
                ->references('id')
                ->on('catalogo_despesas')
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
        Schema::dropIfExists('despesas');
    }
}
