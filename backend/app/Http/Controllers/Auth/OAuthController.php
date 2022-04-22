<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    /**
     * （各認証プロバイダーの）OAuth認可画面URL取得API
     * @param string $provider 認証プロバイダーとなるサービス名
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProviderOAuthURL(string $provider)
    {
        assert(in_array($provider, ['google', 'github', 'line']));
        $redirectUrl = Socialite::driver($provider)->redirect()->getTargetUrl();

        return response()->json([
            'redirect_url' => $redirectUrl,
        ]);
    }

    public static function generateToken()
    {
        return Str::random(80);
    }

    /**
     * ソーシャルログイン処理
     * @return App\User
     */
    public static function handleProviderCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user  = User::where('google_id', $googleUser->id)->first();
        $token = self::generateToken();

        if ($user) {
            $user->update([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'email_verified_at' => now(),
                'profile_photo_path' => $googleUser->user['avatar_url'],
                'login_provider' => 1,
                'google_id' => $googleUser->getId(),
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
                'api_token' => hash('sha256', $token),
            ]);
        } else {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'email_verified_at' => now(),
                'profile_photo_path' => $googleUser->user['avatar_url'],
                'login_provider' => 1,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
                'api_token' => hash('sha256', $token),
            ]);
        }

        Auth::login($user);

        $cookie = cookie('api_token', $token, '10000000', null, null, null, false);
        return redirect(env('FRONTEND_URL'))->cookie($cookie);
    }
}