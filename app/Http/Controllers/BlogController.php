<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function update(Request $request) {
    $blog_id = $request->input('blog_id');

    $blog = Blog::where('id', $blog_id)->where('author', $request->user()->name)->firstOrFail();
    $blog->body = $request->input('body');
    $blog->save();

    return redirect("/blog/$blog_id");
  }

  public function show($id) {
    $blog = Blog::where('id', '=', $id)->firstOrFail();
    $comments = Comment::where('blog_id', '=', $id)->orderBy('created_at', 'desc')->get();
    return view('blog', ['blog' => $blog, 'comments' => $comments]);
  }

  public function edit(Request $request) {
    $blog = Blog::where('id', $request->query('blog_id'))->where('author', $request->user()->name)->firstOrFail();

    return view('blog_form', ['editing' => true, 'blog' => $blog]);
  }

  public function create(Request $request) {
    $author = $request->user()->name;
    $title = $request->input('title');
    $body = $request->input('body');

    Blog::create(['author' => $author, 'title' => $title, 'body' => $body]);
    return redirect('home');
  }
}
