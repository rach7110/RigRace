<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;
use App\Result;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function show(Race $race)
    {
        //
    }


    public function edit($id)
    {
        $race = Race::find($id);

        return view('races.edit', compact('race'));
    }


    public function update(Request $request, $id)
    {
        $race = Race::find($id);
        $result_id = $race->result_id;

        $race->name = $request->input('name');
        $race->distance = $request->input('distance');
        $race->distance_units = $request->input('distance_units');
        $race->start_time = $request->input('start_time');

        if($race->save())
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Race was successfully edited!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');

            return back()->withInput();
        }

        return redirect()->route('results.show', array($result_id));
    }


    public function destroy(Request $request, $id)
    {
        $race = Race::find($id);
        $result_id = $race->result_id;

        if ($race->delete()) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Results group was successfully deleted!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error: there was a problem deleting your race.');
        }

        return redirect()->route('results.show', $result_id);   
    }
}
