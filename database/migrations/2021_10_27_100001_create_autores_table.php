<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoresTable extends Migration
{
    /**
     * Corre las migraciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Autores', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('nombre', 35)->nullable(false);
            $table->string('tematica', 20)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reversa las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Autores');
    }
}