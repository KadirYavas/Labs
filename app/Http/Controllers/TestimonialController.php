<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('testimonial/bdd', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial/addTestimonial');
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
            'nom' => 'required',
            'prenom' => 'required',
            'fonction' => 'required|max:50',
            'texte' => 'required|max:250|min:3',
            'image' => 'required|file',
        ]);

        $photo = Storage::disk('public')->put('', $request->file('image'));

        $testimonial = new Testimonial();
        $testimonial->nom = $request->input('nom');
        $testimonial->prenom = $request->input('prenom');
        $testimonial->fonction = $request->input('fonction');
        $testimonial->texte = $request->input('texte');
        $testimonial->image = $photo;
        $testimonial->save();

        return redirect()->route('bddTestimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('testimonial/editTestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'fonction' => 'required|max:50',
            'texte' => 'required|max:250|min:3',
            'image' => 'required|file',
        ]);

        $testimonial = Testimonial::find($id);

        if ($request->hasFile('image')) {
        $photo = Storage::disk('public')->put('', $request->file('image'));
        $testimonial->image = $photo;
        }

        $testimonial->nom = $request->input('nom');
        $testimonial->prenom = $request->input('prenom');
        $testimonial->fonction = $request->input('fonction');
        $testimonial->texte = $request->input('texte');
        $testimonial->save();

        return redirect()->route('bddTestimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->route('bddTestimonial');
    }
}
