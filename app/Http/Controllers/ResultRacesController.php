<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;   
use App\User;
use App\Race;
use App\Result;

class ResultRacesController extends Controller
{
    public function create($id)
    {
        $result = Result::find($id);

        return view('races.create', compact('result'));

    }

    public function store(Request $request, $id)
    {
        $result = Auth::user()->results()->find($id);
        $race_count = $result->races()->count();

        $race = new Race;
        $race->name = $request->input('name');
        $race->distance = $request->input('distance');
        $race->distance_units = $request->input('distance_units');
        $race->start_time = $request->input('start_time');
        $race->result_id = $result->id;
        $race->number = $race_count + 1;

        if($race->save())
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Race was successfully added!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');

            return back()->withInput();
        }

        return redirect()->route('results.show', array($id));

    }

}
