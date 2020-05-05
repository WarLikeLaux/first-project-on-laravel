@extends('admin.layouts.app')

@section('title')Обновить статью@endsection

@section('content')
<h1>Обновить статью</h1>
<form action="{{ route('admin-blog-article-update-submit', $data->id) }}" method="post">
    @csrf

    <div class="form-group">
        <label for="title">Заголовок статьи</label>
        <input type="text" name="title" value="{{ $data->title }}"id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="content">Контент статьи</label>
        <textarea name="content" id="content" class="form-control">{{ $data->content }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Обновить</button>
</form>
@endsection
