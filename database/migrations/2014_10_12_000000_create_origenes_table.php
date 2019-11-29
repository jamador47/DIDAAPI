<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrigenesActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origenesactivos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('x', 10, 2);
            $table->decimal('y', 10, 2);
            $table->decimal('a', 10, 2);
            $table->decimal('z', 10, 2);

          
           
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
        Schema::dropIfExists('origenesactivos');
    }
}
