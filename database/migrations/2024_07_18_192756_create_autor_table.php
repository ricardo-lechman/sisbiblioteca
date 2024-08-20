<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorTable extends Migration
{
    public function up()
    {
        Schema::create('autor', function (Blueprint $table) {
            $table->id('Cod_Autor');
            $table->string('NombreAutor');
            $table->text('Descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('autor');
    }
}
