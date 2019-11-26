<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('number');
            $table->string('property_country');
            $table->string('state');
            $table->string('property_city');
            $table->string('phone');
            $table->text('address');
            $table->text('location');
            $table->string('rent');
            $table->string('rating');
            $table->string('type');
            $table->string('status');
            $table->unsignedBigInteger('coverimage')->nullable();
            $table->text('facilities')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
