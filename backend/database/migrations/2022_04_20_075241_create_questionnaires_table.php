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
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->comment("ユーザーid");
            $table->uuid("uuid")->comment("URL用UUID");
            $table->string("title")->comment("アンケートタイトル");
            $table->string("description")->nullable()->comment("アンケート説明文章");
            $table->string("evaluation_title")->nullable()->comment("「評価」に値する名前");
            $table->string("impression_title")->nullable()->comment("「感想」に値する名前");
            $table->string("evaluation_emoji")->nullable()->comment("5段階で使いたい絵文字");
            $table->string("good_name")->nullable()->comment("良いに該当する名前");
            $table->string("bad_name")->nullable()->comment("悪いに該当する名前");
            $table->string("after_answering")->nullable()->comment("アンケート送信後の感謝コメント");
            $table->boolean("is_open")->comment("公開中か？");
            $table->string("pass")->nullable()->comment("鍵");
            $table->date("open_at")->nullable()->comment("公開開始時刻");
            $table->date("close_at")->nullable()->comment("公開終了時刻");
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
        Schema::dropIfExists('questionnaires');
    }
};