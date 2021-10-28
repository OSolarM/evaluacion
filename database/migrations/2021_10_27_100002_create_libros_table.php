<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Corre las migraciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Libros', function (Blueprint $table) {
            $table->bigIncrements("id");
			$table->unsignedBigInteger("autor_id")->nullable(false);
            $table->string('titulo', 50)->nullable(false);
            $table->string('editorial', 50)->nullable(false);
            $table->timestamps();
			
			$table->foreign('autor_id')->references('id')->on('autores');
        });
    }

    /**
     * Reversa las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Libros');
    }
}