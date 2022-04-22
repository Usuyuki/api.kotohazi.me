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
        Schema::create('release_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger("genre")->comment("リリースノートジャンルEnum");
            $table->string("title")->comment("タイトル");
            $table->text("description")->comment("説明");
            $table->date("date")->comment("日");
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
        Schema::dropIfExists('release_notes');
    }
};