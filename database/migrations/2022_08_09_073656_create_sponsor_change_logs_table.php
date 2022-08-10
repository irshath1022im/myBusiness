<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorChangeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_change_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sponsor_change_id');
            $table->integer('amount');
            $table->text('remark')->nullable();
            $table->timestamps();
            $table->foreign('sponsor_change_id')->on('sponsor_changes')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsor_change_logs');
    }
}
