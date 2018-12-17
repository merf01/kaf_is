<?php

if (!function_exists('_user')){
  function _user ($user_id)
  {
    $objUser = \App\User::find($user_id);
    if (!$objUser)
    {
        return abort(404);
    }
    return $objUser;
  }
}

/*if (!function_exists('_role')){
  function _role($user_id)
  {
    $objUser = \App\User::find($user_id);
    if (!$objUser)
    {
        return abort(404);
    }
    return $objUser;
  }
}
*/
