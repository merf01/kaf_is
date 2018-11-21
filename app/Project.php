<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public static $rules = array(
  'title' => 'required|between:5,200',
  'description' => 'required|min:10',
  'img1' => 'required|regex:/\/images\/\d{4}\/\d{2}\/\d{2}\/([A-z0-9]){30}\.jpg/',
  // matches /images/2012/12/21/ThisIsTheEndOfTheWorldMaya2112.jpg
  'expires' => 'required|date'
);
}
