<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureUniversitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_universites', function (Blueprint $table) {
            $table->increments('id');
            $table->double('montant_de_paiement')->default('5000');
            $table->double('reste')->default('40000');
            $table->date('date_de_paiement')->default('2018-06-11');
            $table->integer('client_universite_id')->unsigned()->nullable();
            $table->foreign('client_universite_id')->references('id')->on('client_universites');
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
        Schema::dropIfExists('facture_universites');
    }
}
