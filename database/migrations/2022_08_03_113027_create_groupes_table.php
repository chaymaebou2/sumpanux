<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->bigIncrements('IdGroupe');
            $table->string('NomGroupe');
            $table->date('DatePrevu');
            $table->date('DateDebut');
            $table->date('DateFin');
            $table->float('PrixReel');
            $table->string('Attestation_imprimer');
            $table->integer('NombreHeure');
            $table->string('TypePaiement');
            $table->integer('PourcentageProf');
            $table->float('PrixHeure');
            $table->string('LienGroupeWhatssap');
            $table->timestamps();

            $table->unsignedBigInteger('IdJours')->nullable();
            $table->foreign('IdJours')->references('IdJours')->on('Jours')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('IdTPS')->nullable();
            $table->foreign('IdTPS')->references('IdTPS')->on('TpSolution')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('IdInscrit')->nullable();
            $table->foreign('IdInscrit')->references('IdInscrit')->on('InscritEtudiant')
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
        Schema::dropIfExists('groupes');
    }
}
