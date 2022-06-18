<?php

declare(strict_types=1);

namespace App\Http\Actions\OAuth;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * @todo これはまったく分離できていないので後で分離する
 * @todo このクッキー方式だとhttponly属性にできないというセキュリティリスクありのため本番では変更する
 */
final class HandleProviderCallbackAction extends Controller
{
    /**
     * ソーシャルログイン処理
     * @return App\User
     */
    public function __invoke()
    {
        /** @todo statelessメソッドを使用すると、セッション状態の確認を無効にできます。これは、クッキーベースのセッションを利用しないステートレスAPIに、ソーシャル認証を追加する場合に有用 */
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user  = User::where('google_id', $googleUser->id)->first();
        $token = $user->createToken('kotohazi.me')->accessToken;

        if ($user) {
            $user->update([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'email_verified_at' => now(),
                'profile_photo_path' => $googleUser->avatar,
                'login_provider' => 1,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
                'api_token' => hash('sha256', $token),
            ]);
        } else {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'email_verified_at' => now(),
                'profile_photo_path' => $googleUser->avatar,
                'login_provider' => 1,
                'google_id' => $googleUser->id,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
                'api_token' => hash('sha256', $token),
            ]);
        }

        Auth::login($user);

        $cookie = cookie('api_token', $token, '10000000', null, null, null, false);
        return redirect(env('FRONTEND_URL') . '/home')->cookie($cookie);
    }
}