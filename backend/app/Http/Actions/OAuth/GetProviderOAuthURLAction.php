<?php

declare(strict_types=1);

namespace App\Http\Actions\OAuth;

use App\Http\Controllers\Controller;
use App\Http\Responder\OAuthResponder;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

/**
 * @todo これはまったく分離できていないので後で分離する
 */
final class GetProviderOAuthURLAction extends Controller
{
    // private $domain;
    // private $responder;

    // public function __construct()
    // {

    // }

    /**
     * Undocumented function
     *
     * @param string $provider 認証プロバイダーとなるサービス名
     */
    public function __invoke(string $provider): \Illuminate\Http\JsonResponse
    {
        assert(in_array($provider, ['google', 'github', 'line']));
        $redirectUrl = Socialite::driver($provider)->redirect()->getTargetUrl();

        return response()->json([
            'redirect_url' => $redirectUrl,
        ]);
    }
}