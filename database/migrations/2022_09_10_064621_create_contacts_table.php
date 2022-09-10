<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('user_country')->nullable();
            $table->string('password')->nullable();
            $table->string('number')->nullable();
            $table->string('country')->nullable();
            $table->string('cities')->nullable();
            $table->string('industry')->nullable();
            $table->string('total_leads')->nullable();
            $table->string('revenue_minimum')->nullable();
            $table->string('revenue_maximum')->nullable();
            $table->string('duration')->nullable();
            $table->text('message')->nullable();
            $table->string('country_box')->nullable();
            $table->string('city_box')->nullable();
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('contacts');
    }
}
