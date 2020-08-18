<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function show($id) {
    return "blog here with id: $id";
  }

  public function create(Request $request) {
    $author = $request->user()->name();
    $title = $request->input('title');
    $body = $request->input('body');

    Blog::insert(['author' => $author, 'title' => $title, 'body' => $body]);
    return redirect('home');
  }
}
