<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->bigIncrements('IDFormation');
            $table->String('NomFormation');
            
            $table->Float('Prix');
            $table->String('Details');
            $table->Float('Nombreh');
            $table->Float('nbrEtoile');
            $table->String('isnew');
            $table->String('isbest');
            $table->String('isWebsite');
            $table->String('url_img');
            $table->Float('NbrMaxEtd');
            $table->String('ispromos');
            $table->Float('PrixPromos');

            $table->unsignedBigInteger('Titre')->nullable();
            $table->foreign('Titre')->references('Titre')->on('Plan')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('IDFormateur')->nullable();
            $table->foreign('IDFormateur')->references('IDFormateur')->on('Formateur')
                ->onUpdate('cascade')->onDelete('cascade'); 
            $table->unsignedBigInteger('IdInscrit')->nullable();
            $table->foreign('IdInscrit')->references('IdInscrit')->on('InscritNoregiste')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('IDFAQ')->nullable();
            $table->foreign('IDFAQ')->references('IDFAQ')->on('FAQ')
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
        Schema::dropIfExists('formations');
    }
}
