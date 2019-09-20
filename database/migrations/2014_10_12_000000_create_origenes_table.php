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
            $table->decimal('x1', 5, 2);
            $table->decimal('y1', 5, 2);
            $table->decimal('a1', 5, 2);
            $table->decimal('z1', 5, 2);
            $table->decimal('x2', 5, 2);
            $table->decimal('y2', 5, 2);
            $table->decimal('a2', 5, 2);
            $table->decimal('z2', 5, 2);
            $table->decimal('x3', 5, 2);
            $table->decimal('y3', 5, 2);
            $table->decimal('a3', 5, 2);
            $table->decimal('z3', 5, 2);
            $table->decimal('x4', 5, 2);
            $table->decimal('y4', 5, 2);
            $table->decimal('a4', 5, 2);
            $table->decimal('z4', 5, 2);
            $table->decimal('x5', 5, 2);
            $table->decimal('y5', 5, 2);
            $table->decimal('a5', 5, 2);
            $table->decimal('z5', 5, 2);
            $table->decimal('x6', 5, 2);
            $table->decimal('y6', 5, 2);
            $table->decimal('a6', 5, 2);
            $table->decimal('z6', 5, 2);
            $table->decimal('x7', 5, 2);
            $table->decimal('y7', 5, 2);
            $table->decimal('a7', 5, 2);
            $table->decimal('z7', 5, 2);
            $table->decimal('x8', 5, 2);
            $table->decimal('y8', 5, 2);
            $table->decimal('a8', 5, 2);
            $table->decimal('z8', 5, 2);
            $table->decimal('x9', 5, 2);
            $table->decimal('y9', 5, 2);
            $table->decimal('a9', 5, 2);
            $table->decimal('z9', 5, 2);
            $table->decimal('x10', 5, 2);
            $table->decimal('y10', 5, 2);
            $table->decimal('a10', 5, 2);
            $table->decimal('z10', 5, 2);
            $table->decimal('x11', 5, 2);
            $table->decimal('y11', 5, 2);
            $table->decimal('a11', 5, 2);
            $table->decimal('z11', 5, 2);
            $table->decimal('x12', 5, 2);
            $table->decimal('y12', 5, 2);
            $table->decimal('a12', 5, 2);
            $table->decimal('z12', 5, 2);
            $table->decimal('x13', 5, 2);
            $table->decimal('y13', 5, 2);
            $table->decimal('a13', 5, 2);
            $table->decimal('z13', 5, 2);
            $table->decimal('x14', 5, 2);
            $table->decimal('y14', 5, 2);
            $table->decimal('a14', 5, 2);
            $table->decimal('z14', 5, 2);
            $table->decimal('x15', 5, 2);
            $table->decimal('y15', 5, 2);
            $table->decimal('a15', 5, 2);
            $table->decimal('z15', 5, 2);
            $table->decimal('x16', 5, 2);
            $table->decimal('y16', 5, 2);
            $table->decimal('a16', 5, 2);
            $table->decimal('z16', 5, 2);
            $table->decimal('xactivo', 5, 2);
            $table->decimal('yactivo', 5, 2);
            $table->decimal('aactivo', 5, 2);
            $table->decimal('zactivo', 5, 2);
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
