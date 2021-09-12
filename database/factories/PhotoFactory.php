<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'caption'=>$this->faker->sentence(mt_rand(2,8)),
            'url'=>$this->faker->image('public/storage',640,480, null, false),
            'category_id'=>mt_rand(1,3),
            'unit_id'=>mt_rand(1,2)
        ];
    }
}
