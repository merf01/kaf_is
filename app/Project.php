<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $casts = [
      'images' => 'array',
  ];

  public static $rules = array(
  'title' => 'required|between:5,200',
  'description' => 'required|between:5,2000',
  'status' => 'required|between:1,200',
  'img1' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
  'images' => 'mimes:jpeg,jpg,png,gif|max:10000'
  // matches /images/2012/12/21/ThisIsTheEndOfTheWorldMaya2112.jpg
//  'expires' => 'required|date'
);

public function comments()
{
    return $this->hasMany(Comment::class,'project_id','id');
}
}
