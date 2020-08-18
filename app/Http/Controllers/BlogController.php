<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function show($id) {
    $blog = Blog::where('id', '=', $id)->get();
    $comments = Comment::where('blog_id', '=', $id)->orderBy('created_at', 'desc')->get();
    return view('blog', ['blog' => $blog, 'comments' => $blog]);
  }

  public function create(Request $request) {
    $author = $request->user()->name;
    $title = $request->input('title');
    $body = $request->input('body');

    Blog::insert(['author' => $author, 'title' => $title, 'body' => $body]);
    return redirect('home');
  }
}
