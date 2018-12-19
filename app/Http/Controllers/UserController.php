<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function getUsers(){
      // $users=User::where('id', '!=', Auth::id->get());
      $users=User::all();
      return view('developers', compact('users'));
    }
}
