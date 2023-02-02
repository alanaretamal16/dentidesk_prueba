<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    public function up()
    {
        Schema::create('costos', function (Blueprint $table) {
             $table->engine ='InooDB';
            $table->bigIncrements('id');
            $table->unsigned('tratamiento_id');
            $table->string('descripcion');
            $table->integer('valor_unitario');
            $table->integer('cantidad');
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
        Schema::dropIfExists('costos');
    }
}
