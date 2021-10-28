<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Corre los grupos
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Grupos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('nombre', 30)->nullable(false);
            $table->timestamps();
			
        });
    }

    /**
     * Reversa los grupos
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Grupos');
    }
}