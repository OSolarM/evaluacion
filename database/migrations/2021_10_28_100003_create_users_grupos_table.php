<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersGruposTable extends Migration
{
    /**
     * Corre los usuarios
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('UsersGrupos', function (Blueprint $table) {
            $table->bigIncrements("id");
			$table->unsignedBigInteger("user_id")->nullable(false);
			$table->unsignedBigInteger("grupo_id")->nullable(false);
            $table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('grupo_id')->references('id')->on('grupos');
        });
    }

    /**
     * Reversa los usuarios
     * 
     * @return void
     */
    public function down()
    {
        Schema::drop('UsersGrupos');
    }
}