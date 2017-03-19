<?php namespace App\Http\Controllers;

use App\About;
use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dashboard');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function event()
	{
		return view('dash_events');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function gallery()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function about(Request$request)
	{
        return view('dash_about');
	}

	public function aboutStore(Request $request)
    {
        DB::table('abouts')->truncate();
        About::create(['text' =>$request->about]);
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        return view('new_event',['event' =>Event::find($id)]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function delete(Request $request,$id)
    {
        DB::statement(DB::raw("delete from events where id = ".$id));
        return redirect('dashboard/events');
    }

    public function create(Request $request)
    {
        return view('new_event');
    }

    public function newStore(Request $request)
    {
        dump($request);
        Event::create([
            'name' =>$request->name,
            'date' =>$request->date,
            'contact_email'=>$request->contact_email,
            'contact_name'=>$request->contact_name,
            'venue'=>$request->venue

        ]);


        return redirect('/dashboards');
    }

}
