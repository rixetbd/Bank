<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('person_name');
            $table->string('title')->default('N/A');
            $table->string('email')->default('N/A');
            $table->string('phone')->default('N/A');
            $table->string('company_name');
            $table->string('industry')->default('N/A');
            $table->string('company_size')->default('N/A');
            $table->string('revenue')->default('N/A');
            $table->string('zip_code')->nullable();
            $table->string('city')->default('N/A');
            $table->string('country')->default('N/A');
            $table->longText('website')->default('N/A');
            $table->longText('source_link')->default('N/A');
            $table->longText('source_link2')->default('N/A');
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
        Schema::dropIfExists('leads');
    }
}
