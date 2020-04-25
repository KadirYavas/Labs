<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Header;
use App\Titre;
use App\Footer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct() {
        $this->middleware('webmaster')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        $contact = Contact::all();
        $titres = Titre::first();
        $footer = Footer::all();
        return view('contact', compact('header', 'contact', 'titres', 'footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = Contact::all();
        return view('contact/bdd', compact('contact'));
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact/editContact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Respindex', 'indexDeux', 'show', 'searconse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|max:500|min:10',
            'paysville' => 'required',
            'adresse' => 'required',
            'numero' => 'required',
            'email' => 'required',
        ]);

        $contact = Contact::find($id);
        $contact->description = $request->input('description');
        $contact->paysville = $request->input('paysville');
        $contact->adresse = $request->input('adresse');
        $contact->numero = $request->input('numero');
        $contact->email = $request->input('email');

        $contact->save();

        return redirect()->route('ContactBDD');
    }

    /**$this->middleware('adminwebmaster');
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
