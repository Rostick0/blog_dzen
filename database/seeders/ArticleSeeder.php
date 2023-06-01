<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Article::create([
                'title' => Str::random(random_int(5, 31)),
                'content' => Str::random(random_int(100, 300)),
                'categories_id' => random_int(1, 6),
                'users_id' => random_int(1, 10),
                'count_likes' => random_int(0, 2),
                'count_views' => random_int(2, 11)
            ]);
        }
    }
}
