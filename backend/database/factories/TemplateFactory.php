<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TemplateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = new Carbon('2021-03-01');
        return [
            'user_id' => $this->faker->numberBetween(1, 19),
            'name' => $this->faker->randomElement(['とある説明会', 'とある勉強会', 'とある団体']) . 'のアンケート',
            'description' => 'アンケートの説明文がここに入ります',
            'evaluation_title' => 'レーティング',
            'impression_title' => 'お気持ち',
            'evaluation_emoji' => '☕',
            'good_name' => 'うまい',
            'bad_name' => 'まずい',
            'after_answering' => '次回もお待ちしております',
            'is_open' => $this->faker->boolean(),
            'pass' => $this->faker->randomElement(['aaaa', 'bbbb']),
            'open_at' => $date->addMonths($this->faker->numberBetween(1, 12))->format('Y-m-d'),
            'close_at' => $date->addMonths($this->faker->numberBetween(1, 12))->format('Y-m-d'),
        ];
    }
}