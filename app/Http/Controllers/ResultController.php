<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Result;

class ResultController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $results = $user->results();

        return view('results.index')->with('results', $results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('results.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $result = new Result;
        $result->eventname = $request->input('eventname');
        $result->venue = $request->input('venue');
        $result->start_date = $request->input('start_date');
        $result->end_date = $request->input('end_date');
        $result->user_id = $user->id;

        if($result->save())
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Result group was successfully added!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');

            return back()->withInput();
        }

        return redirect('results');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $result = Result::find($id);

        return view('results.show')->with('result', $result)->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::find($id);

        return view('results.edit')->with('result', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = Result::find($id);
        $result->eventname = $request->input('eventname');
        $result->venue = $request->input('venue');
        $result->start_date = $request->input('start_date');
        $result->end_date = $request->input('end_date');

        if ($result->save()) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Results group was successfully edited!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');

            return back()->withInput();
        }

        return redirect()->route('results.show', $result->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $result = Result::find($id);

        if ($result->delete()) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Results group was successfully deleted!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error: there was a problem deleting your result group.');
        }

        return redirect()->route('results.index');

    }
}
