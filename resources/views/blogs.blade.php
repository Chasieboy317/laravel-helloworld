@extends('layouts.app')

@section('title', 'Blogs')

@section('content')
  @foreach ($blogs as $blog)
    <div class="card">
        <div class="card-body">
          <h4 class="card-title"><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h4>
          <h5 class="card-subtitle">{{ $blog->author }} at {{ $blog->created_at }}</h5>
          <p class="card-text">{{ $blog->body }}</p>
        </div>
    </div>
  @endforeach

{{ $blogs->links() }}
@endsection
