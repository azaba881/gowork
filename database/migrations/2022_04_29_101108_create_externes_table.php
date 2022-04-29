<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('externes', function (Blueprint $table) {
            $table->id();
            $table->string('affiche')->nullable();
            $table->string('title');
            $table->string('domaine');
            $table->integer('nombre');
            $table->string('description');
            $table->string('site');
            $table->string('expiration');
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
        Schema::dropIfExists('externes');
    }
}
