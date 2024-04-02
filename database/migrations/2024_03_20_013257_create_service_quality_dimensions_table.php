<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_quality_dimensions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->nullable(); //added
            $table->foreign('client_id')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('cc_survey_id')->nullable(); //added
            $table->foreign('cc_survey_id')->references('id')->on('cc_surveys')->onUpdate('cascade')->onDelete('cascade');
            $table->string('sqd0')->nullable();
            $table->string('sqd1')->nullable();
            $table->string('sqd2')->nullable();
            $table->string('sqd3')->nullable();
            $table->string('sqd4')->nullable();
            $table->string('sqd5')->nullable();
            $table->string('sqd6')->nullable();
            $table->string('sqd7')->nullable();
            $table->string('sqd8')->nullable();
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
        Schema::dropIfExists('service_quality_dimensions');
    }
};
