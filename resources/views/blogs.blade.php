@extends('layouts.app')

@section('title', 'Blogs')

@section('content')

  <h1>Recent blogs</h1>

  @foreach ($blogs as $blog)
    <div class="card">
        <div class="card-body">
          <h4 class="card-title"><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h4>
          <h5 class="card-subtitle">{{ $blog->author }} at {{ $blog->created_at }}</h5>
          <p class="card-text">{{ substr($blog->body, 0, 32).'...' }}</p>
        </div>
    </div>
  @endforeach

{{ $blogs->links() }}
@endsection
