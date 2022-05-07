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
        Schema::create('restaurante_tipo_restaurante', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_restaurante_id')->unsigned();
            $table->bigInteger('restaurante_id')->unsigned();
            $table->timestamps();
            $table->foreign('tipo_restaurante_id')->references('id')->on('tipo_restaurantes');
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
            $table->unique(['tipo_restaurante_id','restaurante_id'],'unica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurante_tipo_restaurante');
    }
};
