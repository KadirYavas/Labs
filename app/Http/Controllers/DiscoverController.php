<?php

namespace App\Http\Controllers;

use App\Discover;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    public function __construct() {
        $this->middleware('webmaster');
    }
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
     * Show th$this->middleware('adminwebmaster');e form for creating a new resource.
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

    public function editTexteVideo($id)
    {
        $discover = Discover::find($id);
        return view('discover/editTexteVideo', compact('discover'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */

    public function updateTexteVideo(Request $request, $id)
    {
        $request->validate([
            'texteDroite' => 'required',
            'texteGauche' => 'required',
            'video' => 'required',
        ]);

        $discover = Discover::find($id);
        $discover->textDroite = $request->input('texteDroite');
        $discover->textGauche = $request->input('texteGauche');
        $discover->video = $request->input('video');
        $discover->bouton = $request->input('bouton');

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
