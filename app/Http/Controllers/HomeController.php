<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}


	public function about(Request $request)
    {
        return view('about');
    }

    public function event(Request $request)
    {
        return view('events');
    }

    public function gallery(Request $request)
    {
        return view('gallery');
    }

    public function contact(Request $request)
    {
        return view('contact');
    }



}
