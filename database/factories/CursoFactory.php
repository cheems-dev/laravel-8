<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $curso =  $this->faker->sentence();
        return [
            'name' => $curso,
            'slug' => Str::slug($curso, '-'),
            'description' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['ñ', 'Diseño Web']),
        ];
    }
}
