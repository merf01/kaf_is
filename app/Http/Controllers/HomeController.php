<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function uploadOfferImage()
	{
		$rules = array('file' => 'mimes:jpeg,png');

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Response::json(array('message' => $validator->messages()->first('file')));
		}

		$dir = '/images'.date('/Y/m/d/');

		do {
			$filename = str_random(30).'.jpg';
		} while (File::exists(public_path().$dir.$filename));

		Input::file('file')->move(public_path().$dir, $filename);

		return Response::json(array('filelink' => $dir.$filename));
	}

}
