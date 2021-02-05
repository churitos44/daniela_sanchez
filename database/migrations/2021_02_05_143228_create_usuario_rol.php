<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id');
            $table->integer('rol_id');

            $table->unsignedBiginteger('usuario_id');

            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuario')
                ->onUpdate('cascade')
                ->onDelete('cascade');

             
            $table->unsignedBiginteger('rol_id');

            $table->foreign('rol_id')
                ->references('id')
                ->on('rol')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('usuario_rol');
    }
}
