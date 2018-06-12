
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('nom' , 50);
            $table->string('prenoms', 150);
            $table->string('email')->unique();
            $table->integer('numero');
            $table->text('cours'); 
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
