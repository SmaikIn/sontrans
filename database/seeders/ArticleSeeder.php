<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Создаем несколько тестовых статей
        $articles = [
            [
                'title' => 'Заголовок статьи 1',
                'description' => 'Описание статьи 1',
                'body' => 'Текст статьи 1',
                'published_at' => now(),
            ],
            [
                'title' => 'Заголовок статьи 2',
                'description' => 'Описание статьи 2',
                'body' => 'Текст статьи 2',
                'published_at' => null,
            ],
            [
                'title' => 'Заголовок статьи 3',
                'description' => 'Описание статьи 3',
                'body' => 'Текст статьи 3',
                'published_at' => null,
            ],
        ];

        // Заполняем таблицу articles
        foreach ($articles as $article) {
            Article::create($article);
        }
        //
    }
}
