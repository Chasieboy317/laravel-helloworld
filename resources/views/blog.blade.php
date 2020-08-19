@extends('layouts.app');

@section('title', $blog->title)

@section('content')

<h1>{{ $blog->title }}</h1>
<h4>By {{ $blog->author }} at {{ $blog->created_at }}</h2>
<h6>Last updated {{ $blog->updated_at }}</h2>
<p>{{ $blog->body }}</p>

<hr>

@if(Auth::user())
  <form method="post" action="{{ route('create_comment') }}">
    @csrf
    <div class="form-group">
      <textarea class="form-control" name="body" rows="1" placeholder="Say something about this blog" required></textarea>
    </div>
    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    <button class="btn btn-primary" type="submit">Comment</button>
  </form>
@endif

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
