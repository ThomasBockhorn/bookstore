<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

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
            'Address Line 1' => $this->faker->address(),
            'Address Line 2' => $this->faker->secondaryAddress(),
            'State' => $this->faker->stateAbbr(),
            'Zipcode' => $this->faker->postcode(),
            'Phone Number' => $this->faker->phoneNumber(),
            'Email' => $this->faker->email(),
            'Status' => $this->faker->boolean(),
            'Past Due' => $this->faker->boolean()
        ];
    }
}