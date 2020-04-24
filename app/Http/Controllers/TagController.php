<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use App\Footer;
use App\Header;
use App\Titre;
use App\Quote;
use App\Commentaire;
use App\Categorie;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();
        return view('tag/bdd', compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tag/ajoutTag');
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
            'tag' => 'required|max:20|min:3',
        ]);

        $tag = new Tag();
        $tag->tag = $request->input('tag');
        $tag->save();

        return redirect()->route('TagBDD');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $search = Tag::find($id);
        $article = $search->articles()->paginate(3);
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
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::find($id);
        return view('tag/editTag', compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tag' => 'required|max:20|min:3',
        ]);

        $tag = Tag::find($id);

        $tag->tag = $request->input('tag');
        $tag->save();

        return redirect()->route('TagBDD');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('TagBDD');
    }
}
