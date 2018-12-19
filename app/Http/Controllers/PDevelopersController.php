<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\PDevelopers;
// use PDevelopers;
class PDevelopersController extends Controller
{
    //

    /**
  	 * Display a listing of the resource.
  	 *
  	 * @return Response
  	 */
  	public function index()
  	{
  		$pdevelopers = PDevelopers::orderBy('id', 'desc');

  		return view('pdevelopers.index', compact('pdevelopers'));
  	}
    public function show($pdevelopers)
    {
      $pdevelopers = PDevelopers::findOrFail($pdevelopers);

      return view('pdevelopers.show', compact('pdevelopers'));
    }
}
