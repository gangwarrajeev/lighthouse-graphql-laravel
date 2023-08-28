<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Support\Str;
use Faker\Provider\en_US\Text;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id'=>Author::inRandomOrder()->first()->id,
            'title'=>$this->faker->title,
            // 'content'=>fake()->realText($maxNbChars = 200, $indexSize = 2),
            'content'=>$this->faker->text,
            'status'=>1,
        ];
    }
}
