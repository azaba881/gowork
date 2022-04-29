<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravailleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travailleurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo');
            $table->string('domaine');
            $table->string('addresse');
            $table->string('site')->nullable();
            $table->string('numero');
            $table->string('linkedyn')->nullable();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable(); 
            $table -> foreignId ( 'user_id' ) 
                   -> constrained ('users') 
                   -> onUpdate ( 'cascade' ) 
                   -> onDelete ( 'cascade' ) ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travailleurs');
    }
}
