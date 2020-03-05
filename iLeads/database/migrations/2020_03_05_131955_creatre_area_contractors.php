<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatreAreaContractors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_contractors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('contractor_id');
            $table->unsignedBigInteger('area_id');
            $table->timestamps();

            //Foreign Keys
            $table->foreign('contractor_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('contractors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
