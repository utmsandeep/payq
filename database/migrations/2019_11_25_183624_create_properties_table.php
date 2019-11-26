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
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('phone');
            $table->text('address');
            $table->text('location');
            $table->string('rent');
            $table->string('rating');
            $table->string('type');
            $table->string('status');
            $table->unsignedBigInteger('media_id')->nullable();
            $table->text('facilities');
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
