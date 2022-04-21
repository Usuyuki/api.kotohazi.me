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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId("questionnaire_id")->constrained()->comment("アンケートのid");
            $table->json("popular_words")->comment("人気の単語をjsonで収納");
            $table->unsignedSmallInteger("number_of_responses")->comment("回答数");
            $table->json("distribution_of_evaluations")->comment("評価の分散");
            $table->unsignedTinyInteger("emotion")->comment("感情数値化");
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
        Schema::dropIfExists('statistics');
    }
};