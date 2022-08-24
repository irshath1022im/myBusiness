<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visa_id');
            $table->unsignedBigInteger('visa_holder_id');

            $table->foreign('visa_id')->references('id')->on('visas');
            $table->foreign('visa_holder_id')->references('id')->on('visa_holders');
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
        Schema::dropIfExists('visa_assignments');
    }
}
