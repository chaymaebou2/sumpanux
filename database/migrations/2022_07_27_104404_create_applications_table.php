<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('idapp');
            $table->string('logo');
            $table->timestamps();

            $table->unsignedBigInteger('Idimg')->nullable();
            $table->foreign('Idimg')->references('Idimg')->on('ImageConverture')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('Idevnm')->nullable();
            $table->foreign('Idevnm')->references('Idevnm')->on('Evenement')
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
        Schema::dropIfExists('applications');
    }
}
