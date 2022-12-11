<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'transactionNo' => fake()->numerify('###'),
            'commuterName' => fake()->name(),
            'seatsTaken' =>fake()->lexify('??'. ', ' . '??' . ', ' . '??'),
            $totalAmt = 'totalAmount' => fake()->randomFloat(2, 150, 1500),
            $startDt = 'departureDate' => fake()->dateTimeBetween('now','2 months'),
            'returnDate' => fake()->dateTimeBetween($startDt, '+2 months'),
            'fare' => fake()->randomFloat(2, 150, $totalAmt),
            'paymentMethod' => fake()->creditCardType(),
            'transactionTime' => fake()->dateTimeBetween('now'),
        ];
    }
}
