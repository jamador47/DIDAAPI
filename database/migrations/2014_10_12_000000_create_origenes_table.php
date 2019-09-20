<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrigenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origenes', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('x1', 10, 2);
            $table->decimal('y1', 10, 2);
            $table->decimal('a1', 10, 2);
            $table->decimal('z1', 10, 2);
            $table->decimal('x2', 10, 2);
            $table->decimal('y2', 10, 2);
            $table->decimal('a2', 10, 2);
            $table->decimal('z2', 10, 2);
            $table->decimal('x3', 10, 2);
            $table->decimal('y3', 10, 2);
            $table->decimal('a3', 10, 2);
            $table->decimal('z3', 10, 2);
            $table->decimal('x4', 10, 2);
            $table->decimal('y4', 10, 2);
            $table->decimal('a4', 10, 2);
            $table->decimal('z4', 10, 2);
            $table->decimal('x5', 10, 2);
            $table->decimal('y5', 10, 2);
            $table->decimal('a5', 10, 2);
            $table->decimal('z5', 10, 2);
            $table->decimal('x6', 10, 2);
            $table->decimal('y6', 10, 2);
            $table->decimal('a6', 10, 2);
            $table->decimal('z6', 10, 2);
            $table->decimal('x7', 10, 2);
            $table->decimal('y7', 10, 2);
            $table->decimal('a7', 10, 2);
            $table->decimal('z7', 10, 2);
            $table->decimal('x8', 10, 2);
            $table->decimal('y8', 10, 2);
            $table->decimal('a8', 10, 2);
            $table->decimal('z8', 10, 2);
            $table->decimal('x9', 10, 2);
            $table->decimal('y9', 10, 2);
            $table->decimal('a9', 10, 2);
            $table->decimal('z9', 10, 2);
            $table->decimal('x10', 10, 2);
            $table->decimal('y10', 10, 2);
            $table->decimal('a10', 10, 2);
            $table->decimal('z10', 10, 2);
            $table->decimal('x11', 10, 2);
            $table->decimal('y11', 10, 2);
            $table->decimal('a11', 10, 2);
            $table->decimal('z11', 10, 2);
            $table->decimal('x12', 10, 2);
            $table->decimal('y12', 10, 2);
            $table->decimal('a12', 10, 2);
            $table->decimal('z12', 10, 2);
            $table->decimal('x13', 10, 2);
            $table->decimal('y13', 10, 2);
            $table->decimal('a13', 10, 2);
            $table->decimal('z13', 10, 2);
            $table->decimal('x14', 10, 2);
            $table->decimal('y14', 10, 2);
            $table->decimal('a14', 10, 2);
            $table->decimal('z14', 10, 2);
            $table->decimal('x15', 10, 2);
            $table->decimal('y15', 10, 2);
            $table->decimal('a15', 10, 2);
            $table->decimal('z15', 10, 2);
            $table->decimal('x16', 10, 2);
            $table->decimal('y16', 10, 2);
            $table->decimal('a16', 10, 2);
            $table->decimal('z16', 10, 2);
            $table->decimal('xactivo', 10, 2);
            $table->decimal('yactivo', 10, 2);
            $table->decimal('aactivo', 10, 2);
            $table->decimal('zactivo', 10, 2);
            $table->integer('coordactivas');
          
           
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
        Schema::dropIfExists('origenes');
    }
}
