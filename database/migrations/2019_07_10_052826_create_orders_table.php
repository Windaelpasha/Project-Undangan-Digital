<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->Increments('id_order');
            $table->string('gambar1');
            $table->string('nav1');
            $table->string('gambar2');
            $table->string('nav2');
            $table->string('gambar3');
            $table->string('nav3');
            $table->string('gambar4');
            $table->string('nav4');
            $table->string('gambar5');
            $table->string('nav5');
            $table->string('gambar6');
            $table->string('nav6');
            $table->integer('id_client')->unsigned();
            $table->foreign('id_client')->references('id_client')->on('client')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('order');
    }
}
