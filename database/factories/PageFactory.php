<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $name = fake()->name();
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'excerpt' => fake()->realTextBetween(75,100,2),
            'description' => fake()->realTextBetween(200,500,2),
            'meta_keywords' => fake()->paragraph($nbSentences = 1, $variableNbSentences = true),
            'meta_description' => fake()->paragraph($nbSentences = 4, $variableNbSentences = true),
            'status' => fake()->boolean()
        ];
    }
}
