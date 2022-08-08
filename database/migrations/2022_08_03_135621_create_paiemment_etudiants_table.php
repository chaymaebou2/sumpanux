<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiemmentEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiemment_etudiants', function (Blueprint $table) {
            $table->bigIncrements('IdPaiement');
            $table->float('Montant');
            $table->date('DatePaiement');
            $table->string('TypePaiement');
            $table->string('Remarque');
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
        Schema::dropIfExists('paiemment_etudiants');
    }
}
