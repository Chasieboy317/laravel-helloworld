<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

  protected $attributes = [
    'title' => 'title',
    'body' => 'body',
    'author' => 'author'
  ];
}