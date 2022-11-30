<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    protected $model = BlogCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->words(2, true);
        $slug = Str::slug($title);

        return [
            'id' => Str::uuid(),
            "name"=>$title,
            "language_id" => "fd1282fa-8c96-4073-ba2e-16f1c55be741",
            "slug" =>  $slug,
            "status" => 1,
        ];
    }
}
