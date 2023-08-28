<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Helper\Helper;
use App\Models\Author;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    protected $key;
    const AuthorType = [
        'Poet',
        'Novelist',
        'Satirist',
        'Short stry writer',
        'ibrettist',
        'Lyricist',
        'laywright',
        'Screewriter'
    ];
    protected $model =Author::class;
    public function __construct(...$parameters)
    {
        parent::__construct();
        $this->key=0;

    }
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            'author_name'=>Helper::AuthorNames[rand(0,20)],
            'author_type'=>self::AuthorType[rand(0,7)],
            'status'=>1
        ];
        $this->key++;
    }
}
