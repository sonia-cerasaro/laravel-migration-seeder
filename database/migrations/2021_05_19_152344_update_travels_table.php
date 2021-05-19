<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('travels', function (Blueprint $table) {
        $table->string('attractions', 100)->after('price')->nullable();   //after indica che la colonna verra' inserita dopo price

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('travels', function (Blueprint $table) {
      $table->dropColumn('attractions');
    });
  }
}
