<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrigenesUTOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origenesuto', function (Blueprint $table) {
            $table->increments('id');
            $table->float('x1', 5, 2);
            $table->float('y1', 5, 2);
            $table->float('a1', 5, 2);
            $table->float('z1', 5, 2);
            $table->float('x2', 5, 2);
            $table->float('y2', 5, 2);
            $table->float('a2', 5, 2);
            $table->float('z2', 5, 2);
            $table->float('x3', 5, 2);
            $table->float('y3', 5, 2);
            $table->float('a3', 5, 2);
            $table->float('z3', 5, 2);
            $table->float('x4', 5, 2);
            $table->float('y4', 5, 2);
            $table->float('a4', 5, 2);
            $table->float('z4', 5, 2);
            $table->float('x5', 5, 2);
            $table->float('y5', 5, 2);
            $table->float('a5', 5, 2);
            $table->float('z5', 5, 2);
            $table->float('x6', 5, 2);
            $table->float('y6', 5, 2);
            $table->float('a6', 5, 2);
            $table->float('z6', 5, 2);
            $table->float('x7', 5, 2);
            $table->float('y7', 5, 2);
            $table->float('a7', 5, 2);
            $table->float('z7', 5, 2);
            $table->float('x8', 5, 2);
            $table->float('y8', 5, 2);
            $table->float('a8', 5, 2);
            $table->float('z8', 5, 2);
            $table->float('x9', 5, 2);
            $table->float('y9', 5, 2);
            $table->float('a9', 5, 2);
            $table->float('z9', 5, 2);
            $table->float('x10', 5, 2);
            $table->float('y10', 5, 2);
            $table->float('a10', 5, 2);
            $table->float('z10', 5, 2);
            $table->float('x11', 5, 2);
            $table->float('y11', 5, 2);
            $table->float('a11', 5, 2);
            $table->float('z11', 5, 2);
            $table->float('x12', 5, 2);
            $table->float('y12', 5, 2);
            $table->float('a12', 5, 2);
            $table->float('z12', 5, 2);
            $table->float('x13', 5, 2);
            $table->float('y13', 5, 2);
            $table->float('a13', 5, 2);
            $table->float('z13', 5, 2);
            $table->float('x14', 5, 2);
            $table->float('y14', 5, 2);
            $table->float('a14', 5, 2);
            $table->float('z14', 5, 2);
            $table->float('x15', 5, 2);
            $table->float('y15', 5, 2);
            $table->float('a15', 5, 2);
            $table->float('z15', 5, 2);
            $table->float('x16', 5, 2);
            $table->float('y16', 5, 2);
            $table->float('a16', 5, 2);
            $table->float('z16', 5, 2);
           
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
        Schema::dropIfExists('origenesuto');
    }
}
