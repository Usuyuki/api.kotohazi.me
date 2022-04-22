<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReleaseNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'genre' => 1,
                'title' => "コトハジメサイト公開",
                'description' => "コトハジメのサイトを公開しました。まだ利用はできません。",
                'date' => Carbon::create(2022, 4, 21),
            ],
            [
                'genre' => 1,
                'title' => "コトハジメ開発開始",
                'description' => "クリーンなコードを目指しています。",
                'date' => Carbon::create(2022, 4, 10),
            ],
        ];
        DB::table("release_notes")->insert($param);
    }
}