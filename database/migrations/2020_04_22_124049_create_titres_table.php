<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titres', function (Blueprint $table) {
            $table->id();
            $table->char('titreDiscover')->nullable();
            $table->char('titreClient')->nullable();
            $table->char('titreService')->nullable();
            $table->char('titreTeam')->nullable();
            $table->char('titreReady')->nullable();
            $table->char('titreContact')->nullable();
            $table->char('titreNewsletter')->nullable();
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
        Schema::dropIfExists('titres');
    }
}
