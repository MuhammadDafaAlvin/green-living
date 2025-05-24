<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $articleId)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:500',
        ]);

        $article = Article::findOrFail($articleId);

        $comment = new Comment();
        $comment->isi_komentar = $validated['content'];
        $comment->article_id = $article->id;
        $comment->user_id = Auth::id();
        $comment->tanggal_komentar = $article->created_at;
        $comment->save();

        return redirect()->route('articles.show', $articleId)->with('success', 'Komentar berhasil ditambahkan!');
    }
}
