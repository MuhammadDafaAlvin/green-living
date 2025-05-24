<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with(['category', 'comments'])->findOrFail($id);

        return view('articles.show', compact('article'));
    }
}
