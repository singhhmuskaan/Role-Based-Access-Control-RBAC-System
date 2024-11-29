<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Role::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->name(),
        ];
    }
}
