<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.    
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'status' => fake()->randomElement(['active','blocked']),
            'uuid' => 'E' . substr(str_shuffle('0123456789'), 0, 6),
            'email' => fake()->unique()->safeEmail(),
            'account_user_type' => fake()->randomElement(['individual', 'cooperate']),
            'user_type' => fake()->randomElement(['seller', 'leaser', 'buyer', 'investor']),
            'phone_number' => fake()->unique()->phoneNumber(),
            'profile_pics' => fake()->imageUrl(200, 200),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
