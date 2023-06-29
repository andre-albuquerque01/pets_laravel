<?php

namespace Database\Factories;

use App\Models\categorys;
use App\Models\Image;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\itens>
 */
class ItensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>  $this->faker->unique()->word,
            'description' => $this->faker->paragraph(),
            'price' =>   $this->faker->randomNumber(2),
            'place' =>  $this->faker->word,
            'status_itens' => 'A',
            'id_users' => 1,
            'id_category' =>  categorys::pluck('id_category')->random(),
            'id_image' => Image::pluck('id_image')->random(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
