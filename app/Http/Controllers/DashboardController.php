<?php

namespace App\Http\Controllers;

use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->simplePaginate(12);
        return view('dashboard', compact('articles'));
    }
}
