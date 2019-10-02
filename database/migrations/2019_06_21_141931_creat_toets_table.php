<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatToetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('docent')->references('firstname')->on('users');
            $table->string('vak');
            $table->string('tijd');
            $table->string('description')->nullable();
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
         Schema::dropIfExists('input');
    }
}
