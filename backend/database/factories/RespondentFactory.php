<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Respondent>
 */
class RespondentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'questionnaire_id' => $this->faker->numberBetween(1, 55),
            'evaluation' => $this->faker->numberBetween(1, 5),
            'impression' => $this->faker->realText(),
        ];
    }
}