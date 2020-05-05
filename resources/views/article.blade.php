@extends('layouts.app')

@section('title'){{ $data->title }}@endsection

@section('content')
  <h1>{{ $data->title }}</h1>
    <div class="alert alert-info mt-5">
      <p>{{ $data->content }}</p>
    </div>
@endsection
