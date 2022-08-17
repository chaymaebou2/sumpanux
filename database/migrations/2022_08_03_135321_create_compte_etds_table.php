<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteEtdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_etds', function (Blueprint $table) {
            $table->bigIncrements('IdCompte');
            $table->string('Textuser');
            $table->string('Emailuser');
            $table->string('Motdepasse');
            $table->string('Imageuser');
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
        Schema::dropIfExists('compte_etds');
    }
}
