<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa_kategorii',255);
            $table->integer('glowna')->default(0);
            $table->integer('status_kategorii')->default(0);
            $table->integer('pozycja_kategorii')->unsigned()->nullable();
            $table->integer('id_glownej_kategorii')->unsigned()->nullable();
            $table->string('tag_kategorii',128)->nullable();
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
        Schema::dropIfExists('categories');
    }
}
