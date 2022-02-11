<?php

namespace Database\Factories;

use App\Models\VRegisterModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class VRegisterModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VRegisterModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vens_id' => $this->faker->text,
        'name' => $this->faker->word,
        'gender' => $this->faker->word,
        'shop_name' => $this->faker->word,
        'shop_license' => $this->faker->word,
        'address' => $this->faker->word,
        'city' => $this->faker->word,
        'pincode' => $this->faker->randomDigitNotNull,
        'mobile_no' => $this->faker->word,
        'email' => $this->faker->word,
        'password' => $this->faker->word,
        'c_password' => $this->faker->word,
        'reffered_by' => $this->faker->randomDigitNotNull,
        'no_of_refs' => $this->faker->randomDigitNotNull,
        'ref_level_id' => $this->faker->randomDigitNotNull,
        'role_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
