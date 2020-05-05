@extends('admin.layouts.app')

@section('title')Блог@endsection

@section('content-title')
<h1>Статьи</h1>
@endsection

@section('content')
@foreach($data as $article)
<div class="alert alert-info mt-5">
    <h3>{{ $article->title }}</h3>
    <p class="mt-5">
        <a href="{{ route('blog-article', $article->id) }}" class="btn btn-warning" target="_blank">Просмотр статьи</a>
        <a href="{{ route('admin-blog-article-update', $article->id) }}" class="btn btn-primary">Редактирование статьи</a>
        <a href="{{ route('admin-blog-article-delete', $article->id) }}" class="btn btn-danger">Удалить статью</a>
    </p>
</div>
@endforeach
@endsection

@section('aside')
<a class="btn btn-success mt-5" href="{{ route('admin-blog-article-create') }}">Добавить новую статью</a>
@endsection
