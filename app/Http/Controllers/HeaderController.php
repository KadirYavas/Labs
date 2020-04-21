<?php

namespace App\Http\Controllers;

use App\Header;
use App\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        $carousel = Carousel::all();
        return view('header/bdd', compact('header', 'carousel'));
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
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header = Header::find($id);
        return view('header/editLogo', compact('header'));
    }
    public function editNav($id)
    {
        $headerNav = Header::find($id);
        return view('header/editNav', compact('headerNav'));
    }
    public function editCarousel($id)
    {
        $headerCarousel = Carousel::find($id);
        return view('header/editCarousel', compact('headerCarousel'));
    }
    public function editTexte($id)
    {
        $headerTexte = Header::find($id);
        return view('header/editTexte', compact('headerTexte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'logo' => 'required|file',
        ]);

        $image = Storage::disk('public')->put('', $request->file('logo'));

        $header = Header::find($id);
        $header->logo = $image;

        $header->save();

        return redirect()->route('welcome');
    }
    public function updateNav(Request $request, $id)
    {
        $request->validate([
            'navUn' => 'required|max:15|min:3',
            'navDeux' => 'required|max:15|min:3',
            'navTrois' => 'required|max:15|min:3',
            'navQuatre' => 'required|max:15|min:3',
        ]);

        $headerNav = Header::find($id);
        $headerNav->navUn = $request->input('navUn');
        $headerNav->navDeux = $request->input('navDeux');
        $headerNav->navTrois = $request->input('navTrois');
        $headerNav->navQuatre = $request->input('navQuatre');

        $headerNav->save();

        return redirect()->route('welcome');
    }
    public function updateCarousel(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|file',
        ]);

        $image = Storage::disk('public')->put('', $request->file('image'));

        $headerCarousel = Carousel::find($id);
        $headerCarousel->image = $image;

        $headerCarousel->save();

        return redirect()->route('welcome');
    }
    public function updateTexte(Request $request, $id)
    {
        $request->validate([
            'texte' => 'required|max:50|min:4',
        ]);

        $headerTexte = Header::find($id);
        $headerTexte->texte = $request->input('texte');

        $headerTexte->save();

        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
    }
}
