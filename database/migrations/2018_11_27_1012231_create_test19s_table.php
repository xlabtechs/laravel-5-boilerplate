<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTest19sTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        Schema::create('test19s', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('name')   ;   
            $table->enum('status',[  'active',  'inactive',])  ;  
            $table->string('zipcode')->nullable()   ;   
            
            $table->dateTimeTz('created_at')->nullable();
            $table->dateTimeTz('updated_at')->nullable();
            $table->string('slug'); 
            $table->softDeletes();
            $table->unique('slug');

            

     });
    }
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
         Schema::dropIfExists('test19s');
    }

}

