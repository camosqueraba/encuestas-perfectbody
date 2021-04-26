<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirugiaEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirugia_encuestas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_paciente');
            $table->string('identificacion');
            $table->string('correo');
            $table->string('telefono');
            $table->string('habitacion');

            $table->int('pregunta_estandar1');
            $table->int('pregunta_estandar2');
            $table->int('pregunta_estandar3');
            $table->int('pregunta_estandar4');
            $table->int('pregunta_estandar5');
            $table->int('pregunta_estandar6');
            $table->int('pregunta_estandar7');
            $table->int('pregunta_estandar8');
            $table->int('pregunta_estandar9');

            $table->string('pregunta1');
            $table->string('justificacion1')->nullable();

            $table->string('pregunta2');
            $table->string('justificacion2')->nullable();

            $table->string('pregunta3');
            $table->string('justificacion3')->nullable();

            $table->string('pregunta4');
            $table->string('justificacion4')->nullable();

            $table->string('pregunta5');
            $table->string('justificacion5')->nullable();

            $table->string('pregunta6');
            $table->string('justificacion6'->nullable());
            
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
        Schema::dropIfExists('cirugia_encuestas');
    }
}
