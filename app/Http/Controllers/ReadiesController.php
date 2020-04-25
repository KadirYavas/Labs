<?php

namespace App\Http\Controllers;

use App\Readies;
use Illuminate\Http\Request;

class ReadiesController extends Controller
{
    public function __construct() {
        $this->middleware('acces');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readies = Readies::all();
        return view('readies/bdd', compact('readies'));
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
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function show(Ready $ready)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $readies = Readies::find($id);
        return view('readies/editReadies', compact('readies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|min:3|max:250',
        ]);

        $readies = Readies::find($id);
        $readies->description = $request->input('description');

        $readies->save();

        return redirect()->route('bddReadies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ready $ready)
    {
        //
    }
}
