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
            $table->decimal('valor');
            $table->integer('item_catalogo_id');
            $table->enum('status', ['A', 'P']);
            $table->tinyInteger('mes_referencia');
            $table->tinyInteger('ano_referencia');
            $table->timestamps();
            $table->foreign('item_catalogo_id')
                ->references('id')
                ->on('item_catalogo')
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
