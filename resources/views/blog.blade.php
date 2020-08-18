@extends('layouts.app');

@section('title', $blog->title)

@section('content')

<h1>{{ $blog->title }}</h1>
<h2>By {{ $blog->author }} at {{ $blog->created_at }}</h2>
<h2>Last updated {{ $blog->updated_at }}</h2>
<p>{{ $blog->body }}</p>

@if($comments)
@foreach($comments as $comment)
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ $comment->author }}</h4>
      <h5 class="card-subtitle">{{ $comment->created_at }}</h5>
      <p class="card-text">{{ $comment->body }}</p>
    </div>
  </div>
@endforeach
@endif
@endsection
