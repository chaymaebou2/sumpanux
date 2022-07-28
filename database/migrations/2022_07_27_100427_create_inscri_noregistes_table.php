<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriNoregistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscri_noregistes', function (Blueprint $table) {
            $table->bigIncrements('IDInscrit');
            $table->string('NomComplet');
            $table->integer('Tel');
            $table->date('DateInscrit');
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
        Schema::dropIfExists('inscri_noregistes');
    }
}
