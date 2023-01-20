<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
final class PaymentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'phone'  => '7' . fake()->numerify('##########'),
            'name'   => fake()->name(),
            'email'  => fake()->safeEmail(),
            'amount' => (float)random_int(100, 900),
        ];
    }
}
