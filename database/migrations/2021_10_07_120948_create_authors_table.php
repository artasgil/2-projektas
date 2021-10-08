<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id(); //cia yra kaip $id
            $table->string("name");  //varchar - string  Per kableli galime nurodyti teksto ilgi ("name",120)
            $table->string("surname");
            $table->string("username");
            $table->timestamps(); //Sio niekada netrinti
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
