<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;

class AdminController extends Controller
{
    public function allArticles()
    {
        $articles = new Blog();
        return view('admin.blog', ['data' => $articles->all()]);
    }

    public function createArticle()
    {
        return view('admin.blog.create');
    }

    public function createArticleSubmit(BlogRequest $req)
    {
        $blog = new Blog();
        $blog->title = $req->input('title');
        $blog->content = $req->input('content');

        $blog->save();

        return redirect()->route('admin-blog')->with('success', 'Статья была успешно добавлена');
    }

    public function deleteArticle($id)
    {
        if (Blog::find($id) !== null) {
            Blog::find($id)->delete();
        }
        return redirect()->route('admin-blog')->with('success', 'Статья была успешно удалена');
    }

    public function updateArticle($id)
    {
        $blog = new Blog();
        return view('admin.blog.update', ['data' => $blog->find($id)]);
    }

    public function updateArticleSubmit($id, BlogRequest $req)
    {
        $blog = Blog::find($id);
        $blog->title = $req->input('title');
        $blog->content = $req->input('content');

        $blog->save();

        return redirect()->route('admin-blog')->with('success', 'Статья была успешно обновлена');
    }
}
