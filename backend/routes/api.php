<?php

use App\Http\Actions\OAuth\GetProviderOAuthURLAction;
use App\Http\Actions\OAuth\HandleProviderCallbackAction;
use App\Http\Actions\ReleaseNote\GetAllReleaseNoteAction;
use App\Http\Actions\User\GetUserInfoAction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**未ログインでアクセスできるページ */
Route::get('/release-notes/all', GetAllReleaseNoteAction::class)->name('リリースノート全件取得'); //ホームページ


Route::middleware('auth:api')->get('/userInfo', GetUserInfoAction::class);
/** @todo Session store not set on requestエラー防止のためにとりあえず入れたミドルウェアラッパーなのでこれはよくないかも */
Route::group(['middleware' => ['web']], function () {
    Route::get('/login/{provider}', GetProviderOAuthURLAction::class)
        ->where('provider', 'google')->name('oauth.request');
});
Route::get('/auth/{provider}/callback', HandleProviderCallbackAction::class)
    ->where('provider', 'google')->name('oauth.callback');

// ログイン
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/api/userInfo', GetUserInfoAction::class)->name('getUserInfoAction');
});