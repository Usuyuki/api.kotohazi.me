<?php

use App\Http\Controllers\Auth\OAuthController;
use Illuminate\Http\Request;
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


Route::middleware('auth:api')->get('/userInfo', function (Request $request) {
    return $request->user();
});
/** @todo Session store not set on requestエラー防止のためにとりあえず入れたミドルウェアラッパーなのでこれはよくないかも */
Route::group(['middleware' => ['web']], function () {
    Route::get('/login/{provider}', [OAuthController::class, 'getProviderOAuthURL'])
        ->where('provider', 'google')->name('oauth.request');
});
Route::get('/auth/{provider}/callback', [OAuthController::class, 'handleProviderCallback'])
    ->where('provider', 'google')->name('oauth.callback');