<?php

namespace App\Http\Controllers;

use App\Article;
use App\Header;
use App\Titre;
use App\Footer;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        $titres = Titre::first();
        $footer = Footer::all();
        return view('blog', compact('header', 'titres' ,'footer'));
    }
    public function indexDeux()
    {
        $header = Header::all();
        $titres = Titre::first();
        $footer = Footer::all();
        return view('blogPost', compact('header' ,'titres' ,'footer'));
    }
    public function indexBDD(){
        $article = Article::all();
        return view('article/bdd', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('article/ajoutArticle', compact('categorie'));
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
            'photo' => 'required|file',
            'titre' => 'required|max:30|min:4',
            'description' => 'required|max:500|min:10',
            'categorie' => 'required'
        ]);

        $article = new Article();
        $article->photo = $request->input('photo');
        $article->titre = $request->input('titre');
        $article->description = $request->input('description');
        $article->users_id = Auth::id();
        $article->categories_id = $request->input('categorie');
        $article->save();

        return redirect()->route('BlogBDD');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categorie = Categorie::all();
        return view('article/editArticle', compact('article', 'categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|file',
            'titre' => 'required|max:30|min:4',
            'description' => 'required|max:500|min:10',
            'categorie' => 'required'
        ]);

        $article = Article::find($id);
        $article->photo = $request->input('photo');
        $article->titre = $request->input('titre');
        $article->description = $request->input('description');
        $article->users_id = Auth::id();
        $article->categories_id = $request->input('categorie');
        $article->save();

        return redirect()->route('BlogBDD');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('BlogBDD');
    }
}
