<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiers', function (Blueprint $table) {
            $table->bigIncrements('IdEtudier');
            $table->date('DateDebut');
            $table->string('PrixFormation');
            $table->boolean('ishaveattestation');
            $table->boolean('isactive');
            $table->timestamps();

            $table->unsignedBigInteger('IdPaiement')->nullable();
            $table->foreign('IdPaiement')->references('IdPaiement')->on('PaiementEtudiant')
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
        Schema::dropIfExists('etudiers');
    }
}
