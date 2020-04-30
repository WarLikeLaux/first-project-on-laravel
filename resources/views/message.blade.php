@extends('layouts.app')

@section('title'){{ $data->subject }}@endsection

@section('content')
  <h1>{{ $data->subject }}</h1>
    <div class="alert alert-info mt-5">
      <p>{{ $data->message }}</p>
      <p>{{ $data->email}}</p>
      <p>{{ $data->name }}</p>
      <p><small>{{ $data->created_at}}</small></p>
      <a href="{{ route('contact-message-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
      <a href="{{ route('contact-message-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection
