<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('errors', function (Blueprint $table) {
            $table->increments('id');
           
            $table->text('O');
            $table->text('I');
            $table->boolean('dx1');
            $table->boolean('dx2');
            $table->boolean('sx1');
            $table->boolean('sx2');
            $table->float('x1', 8, 4);
            $table->float('y1', 8, 4);
            $table->float('z1', 8, 4);

            $table->float('x2', 8, 4);
            $table->float('y2', 8, 4);
                        $table->float('z2', 8, 4);
            $table->float('z3', 8, 4);
            $table->float('z4', 8, 4);
            $table->float('z5', 8, 4);
            $table->float('z6', 8, 4);

            $table->float('x3', 8, 4);
            $table->float('y3', 8, 4);
            $table->float('x4', 8, 4);
            $table->float('y4', 8, 4);
            $table->float('x5', 8, 4);
            $table->float('y5', 8, 4);
            $table->float('x6', 8, 4);
            $table->float('y6', 8, 4);
            $table->boolean('alarmatiny');
              $table->boolean('estadoerror');
$table->integer('ENCODER')->nullable();
            
            /*
            //Circuito de emergencia
            $table->integer('O19')->nullable();
            $table->integer('I5')->nullable();
            $table->integer('I22')->nullable();
            $table->integer('I21')->nullable();
            $table->integer('I18')->nullable();
            $table->integer('I10')->nullable();
            $table->integer('I11')->nullable();
            $table->integer('I1')->nullable();
            $table->integer('I31')->nullable();
            $table->integer('I30')->nullable();
            $table->integer('I29')->nullable();
            $table->integer('I28')->nullable();
            $table->integer('I2')->nullable();
            $table->integer('I27')->nullable();
            $table->integer('O343')->nullable();
            $table->integer('ENCODER')->nullable();
            */
            //
            
         

            
            
      
            
            
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
        Schema::dropIfExists('errors');
    }
}
