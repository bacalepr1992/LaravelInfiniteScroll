<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Article::paginate(5);
        return view('article.index', compact('articles'));
    }
}
