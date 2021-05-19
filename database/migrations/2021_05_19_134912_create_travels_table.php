<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('city', 100);
            $table->text('description')->nullable();                     //di default non e' nullo, ma se vogliamo annullarlo aggiungere il metodo modificatore nullable()
            $table->float('price', 3, 1);                                //Float prende numeri decimali. Primo parametro nome colonna, secondo quante cifre ci sono e quante sono decimali.
            $table->tinyInteger('is_available')->unsigned()->default(1); //unsigned vale per i numeri, significa senza segni (tipo -1) e di default e' disponibile (1 = true  0 = false)
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
        Schema::dropIfExists('travels');
    }
}
