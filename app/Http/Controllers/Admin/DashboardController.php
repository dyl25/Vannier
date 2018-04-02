<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Creation;
use App\Article;

class DashboardController extends Controller
{
    public function index() {
        $creationsCount = Creation::count();
        $articlesCount = Article::count();
        $creations = Creation::latest('id')->take(5)->get();
        $articles = Article::latest('id')->take(5)->get();

        return view('admin.dashboard', compact('creationsCount', 'articlesCount','creations', 'articles'));
    }
}
