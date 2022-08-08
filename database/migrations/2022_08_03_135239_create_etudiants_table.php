<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('IdEtd');
            $table->string('Nom');
            $table->string('prenom');
            $table->date('DateNaiss');
            $table->string('cin');
            $table->string('Url_img');
            $table->boolean('isActive');
            $table->timestamps();

            $table->unsignedBigInteger('IdCompte')->nullable();
            $table->foreign('IdCompte')->references('IdCompte')->on('CompteEtd')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('IdFree')->nullable();
            $table->foreign('IdFree')->references('IdFree')->on('FreeAnnual')
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
        Schema::dropIfExists('etudiants');
    }
}
