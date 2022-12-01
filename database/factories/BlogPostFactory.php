<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{

    protected $model = BlogPost::class;

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
            "title"=>$title,
            "description"=>$this->faker->realText(500),
            "language_id" => "944f7bc8-e18e-44d4-a3f5-5dd8aa729ddd",
            "category_id" => "0336e0ff-f3fa-41a1-af01-589afa07648e",
            "slug" =>  $slug,
            "image" => $this->faker->imageUrl(900, 300),
            "tag" => $this->faker->words(2, true),
            "status" => 1,
        ];

    }
}
