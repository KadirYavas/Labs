<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Titre;

class TitreController extends Controller
{
    public function __construct() {
        $this->middleware('acces');
    }
    public function index() {
        $titres = Titre::all();
        return view('titres/bdd', compact('titres'));
    }
    public function edit($id) {
        $titres = Titre::find($id);
        return view('titres/editTitre', compact('titres'));
    }
    public function update(Request $request, $id) {
        $request->validate([
            'titreDiscover' => 'required',
            'titreClient' => 'required',
            'titreService' => 'required',
            'titreTeam' => 'required',
            'titreContact' => 'required',
            'titreReady' => 'required',
            'titreNewsletter' => 'required',
        ]);

        $titres = Titre::find($id);
        $titres->titreDiscover = $request->input('titreDiscover');
        $titres->titreClient = $request->input('titreClient');
        $titres->titreService = $request->input('titreService');
        $titres->titreTeam = $request->input('titreTeam');
        $titres->titreContact = $request->input('titreContact');
        $titres->titreReady = $request->input('titreReady');
        $titres->titreNewsletter = $request->input('titreNewsletter');

        $titres->save();

        return redirect()->route('bddTitre');
    }
}
