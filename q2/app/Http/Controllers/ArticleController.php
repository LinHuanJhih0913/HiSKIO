<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(StoreArticleRequest $request)
    {
        try {
            return $request->user()->articles()->save(new Article($request->validated()));
        } catch (\Exception $e) {
            Log::error('db error', ['msg' => $e->getMessage(), 'request' => (string)$request]);
            return response()->json(['msg' => 'db error'], Response::HTTP_BAD_GATEWAY);
        }
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        try {
            $article->update($request->validated());
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            Log::error('db error', ['msg' => $e->getMessage(), 'request' => (string)$request]);
            return response()->json(['msg' => 'db error'], Response::HTTP_BAD_GATEWAY);
        }
    }

    public function destroy(Article $article)
    {
        try {
            $article->delete();
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return response()->json(['msg' => 'db error'], Response::HTTP_BAD_GATEWAY);
        }
    }
}
