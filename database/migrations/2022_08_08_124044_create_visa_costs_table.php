<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visa_id');
            $table->integer('amount');
            $table->text('remark');
            $table->timestamps();
            $table->foreign('visa_id')->on('visas')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visa_costs');
    }
}
