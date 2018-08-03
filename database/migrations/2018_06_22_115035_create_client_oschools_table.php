<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

<<<<<<< HEAD

=======
>>>>>>> e5941221b550ae3bd37f5dea67fc5b6184b4fb03
class CreateClientOschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_oschools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->default('dave');
            $table->string('prenoms')->default('dave');
            $table->string('email')->unique()->default('exemple@mail.com');
            $table->string('numero')->default('58450600');
            $table->string('cours')->default('Cours');
<<<<<<< HEAD
            $table->string('image')->default('image.jpg');
=======
            $table->string('image')->default('image.jpeg');
>>>>>>> e5941221b550ae3bd37f5dea67fc5b6184b4fb03
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
        Schema::dropIfExists('client_oschools');
    }
}
