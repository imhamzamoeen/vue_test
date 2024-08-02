<?php

namespace Database\Factories;

use App\Models\books;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\books>
 */
class booksFactory extends Factory
{


    protected $model = books::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title=$this->faker->unique()->name;
        $authorId = User::pluck('id')->toArray();
        return [
            'title'=>$title,
            'description' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(0,1000),
            'quantity' => $this->faker->numberBetween(0,100),
            'author_id' => Arr::random($authorId),
            'slug' => Str::slug($title)
        ];
    }
}
