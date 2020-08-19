<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = ['blog_id', 'body', 'author'];
  protected $attributes = [
    'body' => 'body',
    'author' => 'author'
  ];
}
