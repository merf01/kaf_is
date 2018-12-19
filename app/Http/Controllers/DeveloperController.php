<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developer;
use Illuminate\Support\Facades\DB;
use DB;
class DeveloperController extends Controller
{

    public function index(){
      // $developers=DB::table('developers')->get();
      $developers=Developer::orderBy('developer_id');
      return view('developers.index', ['developers'->$developers]);
      foreach ($developers as $developer) {
  echo $developer->developer_id;
}
    }

public function show($developer_id){
  $developers=findOrFail($developer_id);
  return view('developers');

}

}
