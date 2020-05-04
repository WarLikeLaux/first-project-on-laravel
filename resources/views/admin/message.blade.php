@extends('admin.layouts.app')

@section('title'){{ $data->subject }}@endsection

@section('content')
  <h1>{{ $data->subject }}</h1>
    <div class="alert alert-info mt-5">
      <p>Сообщение: {{ $data->message }}</p>
      <p>Почта: {{ $data->email}}</p>
      <p>Имя: {{ $data->name }}</p>
      <p><small>{{ $data->created_at}}</small></p>
      <a href="{{ route('admin-contacts-message-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
      <a href="{{ route('admin-contacts-message-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection
