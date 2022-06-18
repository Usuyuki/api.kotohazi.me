<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statistic>
 */
class StatisticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'questionnaire_id' => $this->faker->numberBetween(1, 50),
            'popular_words' => json_encode([
                '1' => $this->faker->word,
                '2' => $this->faker->word,
            ]),

            'number_of_responses' => $this->faker->numberBetween(1, 100000),
            'distribution_of_evaluations' => json_encode([
                '1' => $this->faker->word,
                '2' => $this->faker->word,
            ]),
            'emotion' => $this->faker->numberBetween(0, 1.0),
        ];
    }
}