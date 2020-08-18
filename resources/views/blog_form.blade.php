@extends('layouts.php')

@section('title', 'Create new blog')

@section('content')

<form method="post" action="{{ route('create_blog') }}">
  <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" placeholder="Blog title here" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea name="body" rows="6" placeholder="Your blog post text here" class="form-control" required></textarea>
  </div>
</form>

@endsection