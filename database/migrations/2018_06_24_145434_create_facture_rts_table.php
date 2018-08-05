<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureRtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_rts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prestation')->default('Création site web');
            $table->double('montant_de_paiement')->default('5000');
            $table->double('reste')->default('40000');
            $table->date('date_de_paiement')->default('2018-06-11');
            $table->integer('clientRt_id')->unsigned()->nullable();
            $table->foreign('clientRt_id')->references('id')->on('client_rts');
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
        Schema::dropIfExists('facture_rts');
    }
}
