<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_holders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('passport_number');
            $table->string('image')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('contact_number');
            $table->string('country');
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
        Schema::dropIfExists('visa_holders');
    }
}
