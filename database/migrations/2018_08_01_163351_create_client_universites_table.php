<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientUniversitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_universites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->default('dave');
            $table->string('prenoms')->default('dave');
            $table->string('email')->unique()->default('exemple@mail.com');
             $table->string('image')->default('image.jpg');
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
        Schema::dropIfExists('client_universites');
    }
}
