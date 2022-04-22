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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->unsignedTinyInteger('login_provider')->comment('ソーシャル認証のサービス名Enum');

            $table->string('google_id')->nullable()->comment('googleのid');
            $table->string('google_token')->nullable()->unique()->comment('googleのトークン');
            $table->string('profile_photo_path')->nullable()->comment('googleから取得したアイコンurl');
            $table->string('google_refresh_token')->nullable()->comment('googleのリフレッシュトークン'); //これはnullになる。
            $table->string('api_token')->nullable()->comment('同時に生成するapi_token');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};