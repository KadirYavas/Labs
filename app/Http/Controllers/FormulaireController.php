<?php

namespace App\Http\Controllers;

use App\Formulaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Formulaire::all();
        return view('form/bdd', compact('form'));
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
        $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required',
            'subject' => 'required|max:50|min:3',
            'message' => 'required|max:500|min:10',
        ]);

        $form = new Formulaire();
        $form->nom = $request->input('name');
        $form->email = $request->input('email');
        $form->sujet = $request->input('subject');
        $form->message = $request->input('message');
        $form->save();
        
        $name = $request->input('name');
        
        $email =  $request->input('email');
        
        $subject =  $request->input('subject');
        
        $message = $request->input('message');
        
        Mail::to('admin@admin.com')->send(new FormMail($name, $email, $subject, $message));

        return redirect()->to(app('url')->previous() . '#con_form')->with('newsletter', 'sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function show(Formulaire $formulaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulaire $formulaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulaire $formulaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulaire $formulaire)
    {
        //
    }
}
