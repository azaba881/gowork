<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment');
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
        Schema::dropIfExists('bios');
    }
}
