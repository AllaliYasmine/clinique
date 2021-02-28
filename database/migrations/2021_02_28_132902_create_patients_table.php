<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
         $table->id();
         $table->string ('first_name');
        $table->string ('last_name');
        $table->string ('Date_of_Birth');
        $table->string ('sex');
        $table->string ('Contact_Number');
        $table->string ('numéro_de_sécurité_sociale');
        $table->string ('email')->unique();
        $table->string ('Address');
        $table->string ('Maladies_Chroniques');
        $table->string ('antécédents');
        $table->string ('Allergie');
        $table->string ('commentaires');
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
        Schema::dropIfExists('patients');
    }
}
