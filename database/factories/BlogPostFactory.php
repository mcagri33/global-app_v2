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
            "language_id" => "fd1282fa-8c96-4073-ba2e-16f1c55be741",
            "category_id" => "0a785ed3-dc49-40b9-a942-4f127def3d61",
            "slug" =>  $slug,
            "image" => $this->faker->imageUrl(900, 300),
            "tag" => $this->faker->words(2, true),
            "status" => 1,
        ];

    }
}
