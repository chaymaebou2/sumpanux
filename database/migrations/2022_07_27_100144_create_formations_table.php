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
            $table->bigIncrements('id');
            $table->String('nomCour');
            $table->Float('prix');
            $table->String('Details');
            $table->Float('nbrH');
            $table->Float('nbrmax');
            $table->boolean('isnew');
            $table->boolean('isbest');
            $table->boolean('isWebsite');
            $table->String('urlbackground');
            $table->String('url_img_prof');
            $table->String('descr');
            $table->Float('nbrmax');
            $table->boolean('ispromos');
            $table->Float('Prix');
            $table->string('title');
            $table->float('note');


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
            $table->unsignedBigInteger('IdGroupe')->nullable();
            $table->foreign('IdGroupe')->references('IdGroupe')->on('Groupe')
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
