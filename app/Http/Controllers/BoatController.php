<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Boat;
use App\Result;

class BoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boats = Boat::all();

        return view('boats.index')->with('boats', $boats);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boat = Boat::find($id);

        return view('boats.edit')->with('boat', $boat);
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
        $boat = Boat::find($id);
        $boat->boatname = $request->input('boatname');
        $boat->rating = $request->input('rating');
        $boat->skipper_first = $request->input('skipper_first');
        $boat->skipper_last = $request->input('skipper_last');

        $result_id = $boat->result_id;

        if($boat->save())
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Boat was successfully edited!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');

            return back()->withInput();
        }

        return redirect()->route('results.show',  array($result_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $boat = Boat::find($id);
        $result_id = $boat->result_id;

        if($boat->delete()) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Boat was successfully deleted!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error: there was a problem deleting your boat.');
        }

        return redirect()->route('results.show', $result_id);
        
    }
}
