<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Title' => $this->faker->text($maxNbChars = 200),
            'Author First Name' => $this->faker->firstName(),
            'Author Last Name' => $this->faker->lastName(),
            'Category' => $this->faker->word(),
            'Description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'Price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
            'On Sale' => $this->faker->numberBetween($min = 0, $max = 1),
            'Sale Price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
            'book_sale_start_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'book_sale_end_date' => $this->faker->dateTimeBetween('now', '+2 year'),
            'Image' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}