<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
// use App\Developer;
use App\PDevelopers;
class PDevelopersController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index( ){
    // $developers=DB::table('developers')->get();
    // $pdevelopers=Developer::all();
    //
    // foreach ($pdevelopers as $dev) {
    //   // code...
    //   echo $dev->id;
    // }

	$pdevelopers = PDevelopers::orderBy('id', 'desc');

    // $developers = App\Developer::find(1);
    // $developers=Developer::all();
    // $pdevelopers=$data->getIndex();

    // $developers=Developer::orderBy('developer_id');
    return view('developers.index', compact($pdevelopers));

    }
}
