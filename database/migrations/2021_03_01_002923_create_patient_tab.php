<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_tab', function (Blueprint $table) {
            $table->id();
            $table->string ('first_name');
            $table->string ('last_name');
            $table->string ('num');
            $table->string ('date');
            $table->string ('numtel');
            $table->string ('address');
            $table->string ('email')->unique();
            
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
        Schema::dropIfExists('patient_tab');
    }
}
