<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdermitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordermitras', function (Blueprint $table) {
           $table->increments('id');
           $table->unsignedInteger('mitra_id');
           // $table->unsignedInteger('clientmitra_id');
           //  //foreign
            $table->foreign('mitra_id')
                ->references('id')
                ->on('mitras')
                ->onDelete('cascade');

            //foreign
            // $table->foreign('clientmitra_id')
            //     ->references('id')
            //     ->on('clientmitras')
            //     ->onDelete('cascade');

            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->string('gambar4')->nullable();
            $table->string('gambar5')->nullable();
            $table->string('gambar6')->nullable();
            //slide
            $table->string('background')->nullable(); 

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
        Schema::dropIfExists('ordermitras');
    }
}
