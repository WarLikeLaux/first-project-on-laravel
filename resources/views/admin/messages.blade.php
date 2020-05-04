@extends('admin.layouts.app')

@section('title')Список заявок@endsection

@section('content')
  <h1>Список заявок</h1>
  @foreach($data as $message)
    <div class="alert alert-info mt-5">
      <h3>{{ $message->subject }}</h3>
      <p>{{ $message->email}}</p>
      <p><small>{{ $message->created_at}}</small></p>
      <a href="{{ route('admin-contacts-message', $message->id) }}"><button class="btn btn-warning">Детальнее</button></a>
    </div>
  @endforeach
@endsection
