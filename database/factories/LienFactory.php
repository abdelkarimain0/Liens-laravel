<?php

namespace Database\Factories;

use App\Models\Lien;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lien>
 */

class LienFactory extends Factory
{
    protected $model = Lien::class;

    public function definition()
    {
        return [
            'titre' => rtrim($this->faker->sentence(2), '.'),
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
}
