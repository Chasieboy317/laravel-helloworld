<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $attributes = [
    'body' => 'body',
    'author' => 'author'
  ];
}
