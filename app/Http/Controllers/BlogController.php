<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function allArticles()
    {
        $articles = new Blog();
        return view('blog', ['data' => $articles->all()]);
    }

    public function oneArticle($id)
    {
        $articles = new Blog();
        return view('article', ['data' => $articles->find($id)]);
    }
}
