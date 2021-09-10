<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('First Name');
            $table->string('Last Name');
            $table->string('Address Line 1');
            $table->string('Address Line 2');
            $table->string('State');
            $table->string('Zipcode');
            $table->string('Phone Number');
            $table->string('Email');
            $table->boolean('Status');
            $table->boolean('Past Due');
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
        Schema::dropIfExists('customers');
    }
}