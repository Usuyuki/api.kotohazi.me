<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AnnouncementTableSeeder extends Seeder
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
                'title' => "利用規約とプライバシーポリシーの制定",
                'description' => "利用規約とプライバシーポリシーを制定しました。",
                'date' => Carbon::create(2022, 4, 22),
            ],
            [
                'title' => "コトハジメ開発開始",
                'description' => "コトハジメはちょっとしたアンケートをハヤメに作れるサービスです。",
                'date' => Carbon::create(2022, 4, 10),
            ],
        ];
        DB::table("announcements")->insert($param);
    }
}