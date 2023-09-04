<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Transaction::class;
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'name' => $this->faker->word,
            'type' => $this->faker->randomElement(['income', 'expenses', 'transfer']),
            'amount' => $this->faker->randomFloat(2, 0, 10000),
            'account_id' => function() {
                return Account::factory()->create()->id;
            },
        ];
    }
}
