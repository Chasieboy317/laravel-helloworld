<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
  public function show($id) {
    $blog = Blog::where('id', '=', $id)->first();
    $comments = Comment::where('blog_id', '=', $id)->orderBy('created_at', 'desc')->get();
    Log::debug($comments[0]);
    Log::debug($blog);
    return view('blog', ['blog' => $blog, 'comments' => $comments]);
  }

  public function create(Request $request) {
    $author = $request->user()->name;
    $title = $request->input('title');
    $body = $request->input('body');

    Blog::create(['author' => $author, 'title' => $title, 'body' => $body]);
    return redirect('home');
  }
}
