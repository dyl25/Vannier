<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::latest('id')->paginate(9);

        return view('article.index', compact('articles'));
    }

    public function show(Article $article) {
        return view('article.show', compact('article'));
    }
}
