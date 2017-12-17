<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
$table->integer('user_id')->unsigned();
$table->foreign('user_id')->references('id')->on('users');
 //->onDelete('cascade')

// $table->integer('promotion_type_id')->unsigned();
// $table->foreign('promotion_type_id')->references('id_promocji')->on('promotions_type')->onDelete('cascade');
 
$table->string('nazwa_promocji');
$table->text('opis_promocji');
$table->float('wartosc_promocji');
$table->string('kod_promocji');
$table->integer("status_promocji")->default(0);
$table->date('promocja_od');
$table->date('promocja_do');

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
        Schema::dropIfExists('promotions');
    }
}
