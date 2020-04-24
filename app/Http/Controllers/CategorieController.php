<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Article;
use App\Tag;
use App\Quote;
use App\Header;
use App\Footer;
use App\Titre;
use App\Commentaire;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Categorie::all();
        $articles = Article::all();
        return view('categorie/bdd', compact('categorie', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie/ajoutCategorie');
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
            'categorie' => 'required|max:30|min:3',
        ]);

        $categorie = new Categorie();
        $categorie->section = $request->input('categorie');
        $categorie->save();

        return redirect()->route('CategorieBDD');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('categorie_id', $id)->paginate(3);
        $categorie = Categorie::inRandomOrder()->take(6)->get();
        $tag = Tag::inRandomOrder()->take(9)->get();
        $quote = Quote::inRandomOrder()->take(1)->get();
        $header = Header::all();
        $titres = Titre::first();
        $footer = Footer::all();
        $commentaire = Commentaire::where('article_id', $id)->inRandomOrder()->take(2)->get();
        return view('blog', compact('article', 'categorie', 'tag', 'quote', 'titres', 'header', 'footer', 'commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('categorie/editCategorie', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie' => 'required|max:30|min:3',
        ]);

        $categorie = Categorie::find($id);

        $categorie->section = $request->input('categorie');
        $categorie->save();

        return redirect()->route('CategorieBDD');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('CategorieBDD');
    }
}
