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
        $serviceNeuf = Service::orderBy('id', 'desc')->take(9)->get();
        return view('service', compact('header', 'serviceNeuf'));
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
        $service = Service::all();
        $icones = [
            [
                'class' => 'flaticon-050-satellite',
                'code' => 'f131',
            ],
            [
                'class' => 'flaticon-049-projector',
                'code' => 'f130',
            ],
            [
                'class' => 'flaticon-048-abstract',
                'code' => 'f12f',
            ],
            [
                'class' => 'flaticon-050-satellite',
                'code' => 'f131',
            ],
            ['class' => 'flaticon-035-smartphone',
                 'code' => "f122"
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                 'code' => "f123"
            ],
            [
                'class' => 'flaticon-037-idea',
                 'code' => "f124"
            ],
            [
                'class' => 'flaticon-038-graphic-tool-1',
                 'code' => "f125"
            ],
            [
                'class' => 'flaticon-039-vector',
                 'code' => "f126"
            ],
            [
                'class' => 'flaticon-040-rgb',
                 'code' => "f127"
            ],
            [
                'class' => 'flaticon-041-graphic-tool',
                 'code' => "f128"
            ],
            [
                'class' => 'flaticon-042-typography',
                 'code' => "f129"
            ],
            [
                'class' => 'flaticon-043-sketch',
                 'code' => "f12a"
            ],
            [
                'class' => 'flaticon-044-paint-bucket',
                 'code' => "f12b"
            ],
            [
                'class' => 'flaticon-045-video-player',
                 'code' => "f12c"
            ],
            [
                'class' => 'flaticon-046-laptop',
                 'code' => "f12d"
            ],
            [
                'class' => 'flaticon-047-artificial-intelligence',
                 'code' => "f12e"
            ],
        ];
        return view('service/ajoutService', compact('service', 'icones'));
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
        $icones = [
            [
                'class' => 'flaticon-050-satellite',
                'code' => 'f131',
            ],
            [
                'class' => 'flaticon-049-projector',
                'code' => 'f130',
            ],
            [
                'class' => 'flaticon-048-abstract',
                'code' => 'f12f',
            ],
            [
                'class' => 'flaticon-050-satellite',
                'code' => 'f131',
            ],
            ['class' => 'flaticon-035-smartphone',
                 'code' => "f122"
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                 'code' => "f123"
            ],
            [
                'class' => 'flaticon-037-idea',
                 'code' => "f124"
            ],
            [
                'class' => 'flaticon-038-graphic-tool-1',
                 'code' => "f125"
            ],
            [
                'class' => 'flaticon-039-vector',
                 'code' => "f126"
            ],
            [
                'class' => 'flaticon-040-rgb',
                 'code' => "f127"
            ],
            [
                'class' => 'flaticon-041-graphic-tool',
                 'code' => "f128"
            ],
            [
                'class' => 'flaticon-042-typography',
                 'code' => "f129"
            ],
            [
                'class' => 'flaticon-043-sketch',
                 'code' => "f12a"
            ],
            [
                'class' => 'flaticon-044-paint-bucket',
                 'code' => "f12b"
            ],
            [
                'class' => 'flaticon-045-video-player',
                 'code' => "f12c"
            ],
            [
                'class' => 'flaticon-046-laptop',
                 'code' => "f12d"
            ],
            [
                'class' => 'flaticon-047-artificial-intelligence',
                 'code' => "f12e"
            ],
        ];
        return view('service/editService', compact('service', 'icones'));
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
