<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('address');
        $table->string('address2')->nullable();
        $table->string('mobile');
        $table->string('cr_no')->nullable();
        $table->string('license_no');
        $table->string('logo')->nullable();
        $table->string('cr_image')->nullable();
        $table->string('nhra_image')-
        >nullable();
        $table->integer('country_id');
        $table->string('postal_code');
        $table->integer('avg_doctors');
        $table->integer('avg_prescriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinics');
    }
}
