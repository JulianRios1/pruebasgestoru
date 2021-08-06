<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',200);
            $table->integer('idtipomascota')->nullable();
            $table->string('raza',200);
            $table->string('fecha_nacimiento',200);
            $table->string('propietario',200);
            $table->string('tel_propietario',200);
            $table->string('dir_propietario',200);
            $table->string('email_propietario',200);
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
        Schema::dropIfExists('mascotas');
    }
}
