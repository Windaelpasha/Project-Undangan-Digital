<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            //foreign
            $table->foreign('client_id')
                ->references('id')
                ->on('client')
                ->onDelete('cascade');

            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->string('gambar4')->nullable();
            $table->string('gambar5')->nullable();
            $table->string('gambar6')->nullable();
            //slide
            $table->string('slide1')->nullable(); 
            $table->string('slide2')->nullable(); 
            $table->string('slide3')->nullable(); 
            $table->string('slide4')->nullable(); 
            $table->string('slide5')->nullable(); 
            $table->string('slide6')->nullable(); 


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
