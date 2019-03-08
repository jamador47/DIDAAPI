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
           
            $table->json('O');
            $table->json('I');
            
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
