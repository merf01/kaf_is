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


if (!function_exists('_project')){
  function _project ($project_id)
  {
    $objProj = \App\Project::find($project_id);
    if (!$objProj)
    {
        return abort(404);
    }
    return $objProj;
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
