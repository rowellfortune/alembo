<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klants', function (Blueprint $table) {
          $table->id();
          $table->string('voornaam');
          $table->string('achternaam');
          $table->string('geslacht');
          $table->string('huisnummer');
          $table->string('district');
          $table->string('telefoonnummer');
          $table->string('email')->unique();
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
        Schema::dropIfExists('klants');
    }
};