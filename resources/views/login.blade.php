@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <form id="login_form" method="post" action="/login">
    @csrf
    <div class="form-group">
      <label>Email</label>
      <input name="email" type="email" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input name="pass" type="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
@endsection
