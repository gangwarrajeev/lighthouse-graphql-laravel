<?php

namespace Database\Seeders;

use Database\Factories\AuthorFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //dd(Author::factory())
        Author::factory()->count(10)->create();
    }
}
