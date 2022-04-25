<?php

declare(strict_types=1);

namespace App\Http\Actions\ReleaseNote;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReleaseNote;

/**
 * @todo これはまったく分離できていないので後で分離する
 * @todo ちゃんとjsonにして返す
 */
final class GetAllReleaseNoteAction extends Controller
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
        $releaseNotes = ReleaseNote::all();
        return response()->json($releaseNotes);
    }
}