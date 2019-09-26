<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientmitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientmitras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mitra_id');
            //foreign
            $table->foreign('mitra_id')
                ->references('id')
                ->on('mitras')
                ->onDelete('cascade');
            //client
            $table->string('nama')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('clientmitras');
    }
}
