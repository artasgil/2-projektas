<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookitems', function (Blueprint $table) {
            $table->id(); //cia yra kaip $id
            $table->string("title");  //varchar - string  Per kableli galime nurodyti teksto ilgi ("name",120)
            $table->integer("book_code");
            $table->integer("pages");
            $table->string("description");
            $table->integer("author_id");
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
        Schema::dropIfExists('bookitems');
    }
}
