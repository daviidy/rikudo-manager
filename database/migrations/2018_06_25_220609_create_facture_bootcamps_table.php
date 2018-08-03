<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureBootcampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_bootcamps', function (Blueprint $table) {
            $table->increments('id');
            $table->double('montant_de_paiement')->default('5000');
            $table->double('reste')->default('40000');
            $table->date('date_de_paiement')->default('2018-06-11');
            $table->integer('clientBootcamp_id')->unsigned()->nullable();
            $table->foreign('clientBootcamp_id')->references('id')->on('client_bootcamps');
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
        Schema::dropIfExists('facture_bootcamps');
    }
}
