<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
  public static $rules = array(
      'title'=> 'IS',

      };

      // $title=Lang::get('messages.title');

}
