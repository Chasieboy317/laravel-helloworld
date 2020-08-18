@extends('layout.app')

@section('title', 'Blogs')

@section('content')
  @foreach ($blogs as $blog)
    {{ $blog->title }}
  @endforeach

{{ $blogs->links() }}
@endsection
