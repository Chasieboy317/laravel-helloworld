@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1>Your blogs</h1>

@if($blogs)
  <a href="{{ route('create_blog') }}"><button class="btn btn-primary" type="button">Create new blog</button></a>

@foreach ($blogs as $blog)
  <div class="card">
      <div class="card-body">
        <h4 class="card-title"><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h4>
        <p class="card-text">{{ substr($blog->body, 0, 32).'...' }}</p>
        <a href="edit_blog?blog_id={{ $blog->id }}" class="btn btn-primary">Edit blog</a>
      </div>
  </div>
@endforeach

@else
  <p>You haven't written any blogs yet! Click <a href="{{ route('create_blog') }}">here</a> to write your first one.</p>
@endif

@endsection
