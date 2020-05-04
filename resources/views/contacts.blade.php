@extends('layouts.app')

@section('title')Страница контактов@endsection

@section('content')
<h1>Оставить заявку</h1>
<form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="name">Почта</label>
        <input type="text" name="email" placeholder="Введите почту" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="name">Тема сообщения</label>
        <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
