<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Boat;
use App\Result;



class ResultBoats extends Controller
{
    public function create($id)
    {
        $result = Auth::user()->results()->find($id);

        return view('boats.create', compact('result'));
    }

    public function store(Request $request, $id)
    {
        $result = Auth::user()->results()->find($id);

        $boat = new Boat;
        $boat->boatname = $request->input('boatname');
        $boat->rating = $request->input('rating');
        $boat->skipper_first = $request->input('skipper_first');
        $boat->skipper_last = $request->input('skipper_last');
        $boat->result_id = $result->id;

        if($boat->save())
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Boat was successfully added!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');

            return back()->withInput();
        }

        return redirect()->route('results.show', array($id));


    }
    
}
