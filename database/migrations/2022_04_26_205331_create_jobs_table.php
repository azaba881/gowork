<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('affiche')->nullable();
            $table->string('title');
            $table->integer('nombre');
            $table->string('ville');
            $table->string('type');
            $table->string('experience');
            $table->double('salaire');
            $table->string('categorie');
            $table->text('description');
            $table->date('expiration');
            $table->string('statut')->default('active');
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
        Schema::dropIfExists('jobs');
    }
}
