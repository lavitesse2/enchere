<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NomArticle'        => $this->faker->name(),
            'DescriptionArticle'=> $this->faker->text(100),
            'PrixArticle'       => $this->faker->numberBetween(50000,500000),
            'Datecloture'       => $this->faker->date('Y-m-d','now'),

        ];
    }
}
