<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email')->nullable();
            $table->string('habilidades');
            $table->string('intereses');
            $table->string('aptitudes');
            $table->string('idiomas');
            $table->string('descripcion');
            $table->unsignedInteger('telefono');
            $table->string('ubicacion');
            $table->string('linkedin');
            $table->string('exp1');
            $table->string('exp2');
            $table->string('exp3');
            $table->string('univ');
            $table->string('sec');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil');
    }
}
