<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AjoutChampEmailsAClientsOschool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('client_oschools', function (Blueprint $table) {
          $table->string('email')->default('exemple@mail.com');
          $table->string('image')->default('image.jpg');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('email');
        $table->dropColumn('image');
    }
}
