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
        Schema::create('leveranciers', function (Blueprint $table) {
          $table->id();
          $table->string('bedrijfsnaam');
          $table->string('adres');
          $table->string('district');
          $table->string('directeur');
          $table->string('telefoonnummer');
          $table->string('website');
          $table->enum('is_published', ['published', 'draft']);
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
        Schema::dropIfExists('leveranciers');
    }
};
