<?php

namespace App\Http\Controllers;

use App\Service;
use App\Header;
use App\Contact;
use App\Titre;
use App\Footer;
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
        $serviceNeuf = Service::orderBy('id', 'desc')->paginate(9);
        $contact = Contact::all();
        $titres = Titre::first();
        $footer = Footer::all();
        $serviceSix = Service::orderBy('id', 'desc')->take(6)->get();
        return view('service', compact('header', 'serviceNeuf', 'contact', 'titres', 'footer', 'serviceSix'));
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
                'class' => 'flaticon-023-flask',
                'code' => 'f116',
            ],
            [
                'class' => 'flaticon-011-compass',
                'code' => 'f10a',
            ],
            [
                'class' => 'flaticon-001-picture',
                'code' => 'f100',
            ],
            [
                'class' => 'flaticon-002-caliper',
                'code' => 'f101',
            ],
            [
                'class' => 'flaticon-003-energy-drink',
                'code' => 'f102',
            ],
            [
                'class' => 'flaticon-004-build',
                 'code' => "f103"
            ],
            [
                'class' => 'flaticon-005-thinking-1',
                 'code' => "f104"
            ],
            [
                'class' => 'flaticon-006-prism',
                 'code' => "f105"
            ],
            [
                'class' => 'flaticon-007-paint',
                 'code' => "f106"
            ],
            [
                'class' => 'flaticon-008-team',
                 'code' => "f107"
            ],
            [
                'class' => 'flaticon-010-diamond',
                 'code' => "f109"
            ],
            [
                'class' => 'flaticon-012-cube',
                 'code' => "f10b"
            ],
            [
                'class' => 'flaticon-013-puzzle',
                 'code' => "f10c"
            ],
            [
                'class' => 'flaticon-014-magic-wand',
                 'code' => "f10d"
            ],
            [
                'class' => 'flaticon-015-book',
                 'code' => "f10e"
            ],
            [
                'class' => 'flaticon-016-vision',
                 'code' => "f10f"
            ],
            [
                'class' => 'flaticon-017-notebook',
                 'code' => "f110"
            ],
            [
                'class' => 'flaticon-018-laptop-1',
                 'code' => "f11"
            ],
            [
                'class' => 'flaticon-019-coffee-cup',
                 'code' => "f112"
            ],
            [
                'class' => 'flaticon-020-creativity',
                 'code' => "f113"
            ],
            [
                'class' => 'flaticon-021-thinking',
                 'code' => "f114"
            ],
            [
                'class' => 'flaticon-022-branding',
                 'code' => "f115"
            ],
            [
                'class' => 'flaticon-026-search',
                 'code' => "f119"
            ],
            [
                'class' => 'flaticon-029-sketchbook',
                 'code' => "f11c"
            ],
            [
                'class' => 'flaticon-031-scheme',
                 'code' => "f11e"
            ],
            [
                'class' => 'flaticon-034-cactus',
                 'code' => "f121"
            ],
            [
                'class' => 'flaticon-035-smartphone',
                 'code' => "f122"
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                 'code' => "f123"
            ],
            [
                'class' => 'flaticon-039-vector',
                 'code' => "f126"
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
                'class' => 'flaticon-023-flask',
                'code' => 'f116',
            ],
            [
                'class' => 'flaticon-011-compass',
                'code' => 'f10a',
            ],
            [
                'class' => 'flaticon-001-picture',
                'code' => 'f100',
            ],
            [
                'class' => 'flaticon-002-caliper',
                'code' => 'f101',
            ],
            [
                'class' => 'flaticon-003-energy-drink',
                'code' => 'f102',
            ],
            [
                'class' => 'flaticon-004-build',
                 'code' => "f103"
            ],
            [
                'class' => 'flaticon-005-thinking-1',
                 'code' => "f104"
            ],
            [
                'class' => 'flaticon-006-prism',
                 'code' => "f105"
            ],
            [
                'class' => 'flaticon-007-paint',
                 'code' => "f106"
            ],
            [
                'class' => 'flaticon-008-team',
                 'code' => "f107"
            ],
            [
                'class' => 'flaticon-010-diamond',
                 'code' => "f109"
            ],
            [
                'class' => 'flaticon-012-cube',
                 'code' => "f10b"
            ],
            [
                'class' => 'flaticon-013-puzzle',
                 'code' => "f10c"
            ],
            [
                'class' => 'flaticon-014-magic-wand',
                 'code' => "f10d"
            ],
            [
                'class' => 'flaticon-015-book',
                 'code' => "f10e"
            ],
            [
                'class' => 'flaticon-016-vision',
                 'code' => "f10f"
            ],
            [
                'class' => 'flaticon-017-notebook',
                 'code' => "f110"
            ],
            [
                'class' => 'flaticon-018-laptop-1',
                 'code' => "f11"
            ],
            [
                'class' => 'flaticon-019-coffee-cup',
                 'code' => "f112"
            ],
            [
                'class' => 'flaticon-020-creativity',
                 'code' => "f113"
            ],
            [
                'class' => 'flaticon-021-thinking',
                 'code' => "f114"
            ],
            [
                'class' => 'flaticon-022-branding',
                 'code' => "f115"
            ],
            [
                'class' => 'flaticon-026-search',
                 'code' => "f119"
            ],
            [
                'class' => 'flaticon-029-sketchbook',
                 'code' => "f11c"
            ],
            [
                'class' => 'flaticon-031-scheme',
                 'code' => "f11e"
            ],
            [
                'class' => 'flaticon-034-cactus',
                 'code' => "f121"
            ],
            [
                'class' => 'flaticon-035-smartphone',
                 'code' => "f122"
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                 'code' => "f123"
            ],
            [
                'class' => 'flaticon-039-vector',
                 'code' => "f126"
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
