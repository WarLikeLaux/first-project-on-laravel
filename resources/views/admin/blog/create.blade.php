@extends('admin.layouts.app')

@section('title')Новая статья@endsection

@section('content')
<h1>Новая статья</h1>
<form action="{{ route('admin-blog-article-create') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="title">Заголовок статьи</label>
        <input type="text" name="title" placeholder="Введите заголовок статьи" id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="content">Контент статьи</label>
        <textarea name="content" id="content" placeholder="Впишите контент статьи" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Добавить</button>
</form>
@endsection
