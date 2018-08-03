<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureSoutenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_soutenances', function (Blueprint $table) {
            $table->increments('id');
            $table->double('montant_de_paiement')->default('5000');
            $table->double('reste')->default('40000');
            $table->date('date_de_paiement')->default('2018-06-11');
            $table->integer('clientSoutenance_id')->unsigned()->nullable();
            $table->foreign('clientSoutenance_id')->references('id')->on('client_soutenances');
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
        Schema::dropIfExists('facture_soutenances');
    }
}
