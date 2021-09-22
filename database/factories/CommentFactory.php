<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'First Name' => $this->faker->firstName(),
            'Last Name' => $this->faker->lastName(),
            'Comment' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'Stars' => $this->faker->numberBetween(0, 5),
            'Book_ID' => Book::inRandomOrder()->first()->id
        ];
    }
}