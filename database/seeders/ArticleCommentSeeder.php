<?php

namespace Database\Seeders;

use App\Models\ArticleComment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            ArticleComment::create([
                'content' => Str::random(random_int(10, 40)),
                'is_author_like' => random_int(0, 1),
                'articles_id' => random_int(1, 10),
                'users_id' => random_int(1, 10)
            ]);
        }
    }
}
