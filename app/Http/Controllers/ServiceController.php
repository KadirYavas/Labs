<?php

namespace App\Http\Controllers;

use App\Service;
use App\Header;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        return view('service', compact('header'));
    }
    public function indexBDD()
    {
        $service = Service::all();
        return view('service/bdd', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service/ajoutService', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required',
            'titre' => 'required|max:30|min:4',
            'description' => 'required|max:500|min:10',
        ]);

        $service = new Service();
        $service->logo = $request->input('logo');
        $service->titre = $request->input('titre');
        $service->description = $request->input('description');
        $service->save();

        return redirect()->route('ServiceBDD');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('service/editService', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'logo' => 'required',
            'titre' => 'required|max:30|min:4',
            'description' => 'required|max:500|min:10',
        ]);

        $service = Service::find($id);
        $service->logo = $request->input('logo');
        $service->titre = $request->input('titre');
        $service->description = $request->input('description');

        $service->save();

        return redirect()->route('ServiceBDD');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('ServiceBDD');
    }
}
