<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(19)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'i@test.com',
        ]);

        $categories = Category::factory(4)->create();

        $questions = Question::factory(30)->create(
            [
                'category_id' => fn () => $categories->random()->id,
                'user_id' => fn () => User::inRandomOrder()->first()->id,
            ]
        );

        $blogs = Blog::factory(10)->create(
            [
                'user_id' => fn () => User::inRandomOrder()->first()->id,
                'category_id' => fn () => $categories->random()->id,
            ]
        );

        $questionAnswers = Answer::factory(100)->create(
            [
                'user_id' => fn () => User::inRandomOrder()->first()->id,
                'answerable_id' => fn () => $questions->random()->id,
                'answerable_type' => fn () => Question::class,
            ]
        );

        Comment::factory(100)->create(
            [
                'user_id' => fn () => User::inRandomOrder()->first()->id,
                'commentable_id' => fn () => $questionAnswers->random()->id,
                'commentable_type' => fn () => Answer::class,
            ]
        );

        $blogAnswers = Answer::factory(100)->create(
            [
                'user_id' => fn () => User::inRandomOrder()->first()->id,
                'answerable_id' => fn () => $blogs->random()->id,
                'answerable_type' => fn () => Blog::class,
            ]
        );

        // Comments for blog answers
        Comment::factory(100)->create(
            [
                'user_id' => fn () => User::inRandomOrder()->first()->id,
                'commentable_id' => fn () => $blogAnswers->random()->id,
                'commentable_type' => fn () => Answer::class,
            ]
        );

        // Comments for blogs
        Comment::factory(100)->create(
            [
                'user_id' => fn () => User::inRandomOrder()->first()->id,
                'commentable_id' => fn () => $blogs->random()->id,
                'commentable_type' => fn () => Blog::class,
            ]
        );

    }
}
