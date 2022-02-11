<?php

namespace Database\Factories;

use App\Models\RefCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RefCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'description' => $this->faker->word,
        'reward' => $this->faker->word,
        'congratulatory_message' => $this->faker->word,
        'target_no_refferrals' => $this->faker->word,
        'points_per_refferral' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
