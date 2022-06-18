<?php

declare(strict_types=1);

namespace App\Http\Actions\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

/**
 * @todo これはまったく分離できていないので後で分離する
 * @todo ちゃんとjsonにして返す
 */
final class GetUserInfoAction extends Controller
{
    // private $domain;
    // private $responder;

    // public function __construct()
    // {

    // }

    /**
     * Undocumented function
     *
     */
    public function __invoke(Request $request): \Illuminate\Http\JsonResponse
    {
        $user = Auth::user();
        return response()->json([
            'name' => $user->name,
            'id' => $user->id,
        ]);
    }
}