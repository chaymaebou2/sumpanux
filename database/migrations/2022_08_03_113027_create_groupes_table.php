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
            $table->date('date');
            $table->date('DateFin');
            $table->String('urlbackground');
            $table->float('Prix');
            $table->string('Attestation_imprimer');
            $table->integer('Heure');
            $table->integer('hoursProgress');
            $table->string('TypePaiement');
            $table->string('LoadingProgresse');
            $table->integer('PourcentageProf');
            $table->string('lienwtsp');
            $table->string('title');
            $table->float('note');
            $table->string('classe');
            $table->string('desc');
            $table->string('classProgress');
            $table->string('prof');
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
            $table->unsignedBigInteger('IdPaiement')->nullable();
            $table->foreign('IdPaiement')->references('IdPaiement')->on('paiement_profs')
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
