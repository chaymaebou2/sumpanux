<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->bigIncrements('IdSeance');
            $table->string('nomseance');
            $table->integer('jourseance');
            $table->string('HeureD');
            $table->string('HeureF');
            $table->string('TypeSeance');
            $table->string('CauseAnnuler');
            $table->string('precence');
            $table->integer('color');
            $table->date('dateseance');
            $table->timestamps();

            $table->unsignedBigInteger('Idabsence')->nullable();
            $table->foreign('Idabsence')->references('Idabsence')->on('absenses')
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
        Schema::dropIfExists('seances');
    }
}
