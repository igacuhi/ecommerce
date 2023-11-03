<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand_name = $this->faker->unique()->words($nb=2,$astext = true);
        $slug=str::slug($brand_name);
        return [
            'name' => Str::title($brand_name),
            'slug'=>$slug,
            'image' => $this->faker->numberBetween(1,6).'.jpg'
        ];
    }
}
