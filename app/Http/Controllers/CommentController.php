<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
  public function show(Request $request) {
    $blog_id = $request->input('blog_id');
    $author = $request->user()->name;
    $body = $request->input('body');
    Comment::insert(['blog_id' => $blog_id, 'author' => $author, 'body' => $body]);

    return redirect("/blog/$blog_id");
  }
    //
}
