<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogPopulateController extends Controllers
{
  $blogs = Blog::all();
  public function show() {
    $blogs = Blog::orderBy('created_at', 'desc')->paginate(15;
    return view('blogs', ['blogs' => $blogs]);
  }
}
