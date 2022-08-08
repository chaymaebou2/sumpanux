<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomCategorie');
            $table->boolean('isWebsite');
            $table->timestamps();

            $table->unsignedBigInteger('urlbackground')->nullable();
            $table->foreign('urlbackground')->references('urlbackground')->on('Formation')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
