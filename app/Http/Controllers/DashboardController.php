<?php

namespace App\Http\Controllers;

use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('dashboard', compact('articles'));
    }
}
