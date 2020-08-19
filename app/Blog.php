<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  protected $fillable = ['title', 'body', 'author'];
  protected $attributes = [
    'title' => 'title',
    'body' => 'body',
    'author' => 'author'
  ];
}
