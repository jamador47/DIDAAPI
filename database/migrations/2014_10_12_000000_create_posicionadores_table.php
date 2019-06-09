<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateposicionadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posicionadores', function (Blueprint $table) {
            $table->increments('id');
           

            $table->boolean('a1f1');
            $table->boolean('a1f2');
            $table->boolean('a1l1');
            $table->boolean('y1f1');
            $table->boolean('y1f2');
            $table->boolean('y1l1');
            $table->boolean('a2f1');
            $table->boolean('a2f2');
            $table->boolean('a2l1');
            $table->boolean('a2l2');
            $table->boolean('y2f1');
            $table->boolean('y2f2');
            $table->boolean('y2l1');
            $table->boolean('y2l2');
            $table->boolean('entregaon');
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
        Schema::dropIfExists('posicionadores');
    }
}
