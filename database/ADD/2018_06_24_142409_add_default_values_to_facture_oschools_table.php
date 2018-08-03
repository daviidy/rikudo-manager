<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultValuesToFactureOschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('facture_oschools', function (Blueprint $table) {
        $table->string('cours')->default('Formation Développeur Web');
        $table->double('montant_de_paiement')->default('5000');
        $table->double('reste')->default('40000');
        $table->date('date_de_paiement')->default('2018-06-11');
        $table->integer('clientOschool_id')->unsigned()->nullable();
        $table->foreign('clientOschool_id')->references('id')->on('client_oschools');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('cours');
        $table->dropColumn('montant_de_paiement');
        $table->dropColumn('reste');
        $table->dropColumn('date_de_paiement');
        $table->dropColumn('clientOschool_id');
    }
}
