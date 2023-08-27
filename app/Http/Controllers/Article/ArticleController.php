<?php

namespace App\Http\Controllers\Article;

use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use App\Services\Article\ArticleService;
use Illuminate\Http\JsonResponse;

class ArticleController extends BaseController
{
    public function __construct(ArticleService $service)
    {
        parent::__construct($service);
        $this->authorizeResource(Article::class, 'article');
    }

    /**
     * @param UpdateRequest $request
     * @param Article $article
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Article $article): \Illuminate\Http\JsonResponse
    {
        $this->service->update($request, $article);

        logger()->info("Article {$article->title} was created");

        return response()->json(['success' => true, 'article_id' => $article->id]);
    }
}
