<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUsuario');
            $table->string('nombreCompleto');
            $table->string('email');
            $table->string('telefono');
            $table->integer('edad');
            $table->string('fechaNacimiento');
            $table->integer('configuracion_id');

            $table->unsignedBiginteger('rol_id');

            $table->foreign('configuracion_id')
                ->references('id')
                ->on('configuracion')
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
        Schema::dropIfExists('usuario');
    }
}
