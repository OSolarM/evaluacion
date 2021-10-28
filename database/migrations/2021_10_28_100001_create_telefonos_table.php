<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonosTable extends Migration
{
    /**
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Telefonos', function (Blueprint $table) {
            $table->bigIncrements("id");
			$table->unsignedBigInteger("user_id")->nullable(false);
            $table->string('numero', 10)->nullable(false);
            $table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     *      *
     * @return void
     */
    public function down()
    {
        Schema::drop('Telefonos');
    }
}