<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureOschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_oschools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cours');
            $table->double('montant_de_paiement');
            $table->double('reste');
            $table->date('date_de_paiement');
            $table->integer('clientOschool_id')->unsigned()->nullable();
            $table->foreign('clientOschool_id')->references('id')->on('client_oschools');
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
        Schema::dropIfExists('facture_oschools');
    }
}
