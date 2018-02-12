<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creation;
use App\Article;

class HomeController extends Controller
{
    public function index()
    {
        $creation = new Creation();

        $articles = Article::latest('id')->take(3)->get();
        $creations = $creation::latest('id')->take(3)->get();
        $galeryCreations = $creation->randCreations(3, $creations);

        return view('home', compact('articles', 'creations', 'galeryCreations'));
    }




}
