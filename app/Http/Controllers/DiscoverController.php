<?php

namespace App\Http\Controllers;

use App\Discover;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discover = Discover::all();
        return view('discover/bdd', compact('discover'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function show(Discover $discover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function editVideo($id)
    {
        $discover = Discover::find($id);
        return view('discover/editVideo', compact('discover'));
    }

    public function editTexteGauche($id)
    {
        $discover = Discover::find($id);
        return view('discover/editTexteGauche', compact('discover'));
    }

    public function editTexteDroite($id)
    {
        $discover = Discover::find($id);
        return view('discover/editTexteDroite', compact('discover'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function updateVideo(Request $request, $id)
    {
        $request->validate([
            'video' => 'required',
        ]);

        $discover = Discover::find($id);
        $discover->video = $request->input('video');

        $discover->save();

        return redirect()->route('bddDiscover');
    }
    public function updateTexteGauche(Request $request, $id)
    {
        $request->validate([
            'texteGauche' => 'required',
        ]);

        $discover = Discover::find($id);
        $discover->textGauche = $request->input('texteGauche');

        $discover->save();

        return redirect()->route('bddDiscover');
    }
    public function updateTexteDroite(Request $request, $id)
    {
        $request->validate([
            'texteDroite' => 'required',
        ]);

        $discover = Discover::find($id);
        $discover->textDroite = $request->input('texteDroite');

        $discover->save();

        return redirect()->route('bddDiscover');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discover $discover)
    {
        //
    }
}
