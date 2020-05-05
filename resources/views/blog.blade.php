@extends('layouts.app')

@section('title')Блог@endsection

@section('content')
  <h1>Статьи</h1>
  @foreach($data as $article)
    <div class="alert alert-info mt-5">
      <h3>{{ $article->title }}</h3>
      <a href="{{ route('blog-article', $article->id) }}" <button class="btn btn-warning">Просмотр статьи</button></a>
    </div>
  @endforeach
@endsection
