<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;
class MainController extends Controller
{
    //
    public function show()
    {
        $title=Lang::get('auth.title');
        $main=Lang::get('auth.main');
        $projects=Lang::get('auth.projects');
        $developers=Lang::get('auth.developers');

        $header_title=Lang::get('auth.header_title');
        return view('index', ['title'=>$title, 'header_title'=>$header_title, 'main'=>$main, 'projects'=>$projects, 'developers'=>$developers]);
    }
}
