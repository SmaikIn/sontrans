<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::all();
        $tags = Tag::all();
        foreach ($articles as $article) {
            $random_tags_count = rand(1, count($tags));
            $random_tags = $tags->random($random_tags_count);
            foreach ($random_tags as $tag) {
                $article->tags()->attach($tag);
            }
        }
        //
    }
}
