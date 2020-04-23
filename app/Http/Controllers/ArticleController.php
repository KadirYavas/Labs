<?php

namespace App\Http\Controllers;

use App\Article;
use App\Header;
use App\Titre;
use App\Footer;
use App\Categorie;
use App\Quote;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $quote = Quote::inRandomOrder()->take(1)->get();
        $tag = Tag::inRandomOrder()->take(9)->get();
        $categorie = Categorie::inRandomOrder()->take(6)->get();
        $article = Article::orderBy('id', 'desc')->paginate(3);
        return view('blog', compact('header', 'titres' ,'footer', 'quote', 'tag', 'categorie', 'article'));
    }
    public function indexDeux()
    {
        $header = Header::all();
        $titres = Titre::first();
        $footer = Footer::all();
        $quote = Quote::inRandomOrder()->take(1)->get();
        $tag = Tag::inRandomOrder()->take(9)->get();
        $categorie = Categorie::inRandomOrder()->take(6)->get();
        return view('blogPost', compact('header' ,'titres' ,'footer', 'quote', 'tag', 'categorie'));
    }
    public function indexBDD(){
        $article = Article::all();
        return view('article/bdd', compact('article'));
    }
    public function indexBDDValide(){
        $article = Article::all();
        return view('article/bddValide', compact('article'));
    }

    /**
     * Show the form for creating a new resou <a href="{{route('editArticle', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier l'article</button></a>rce.
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

        $image = Storage::disk('public')->put('', $request->file('photo'));

        $article = new Article();
        $article->photo = $image;
        $article->titre = $request->input('titre');
        $article->description = $request->input('description');
        $article->users_id = Auth::id();
        $article->categories_id = $request->input('categorie');
        $article->valide = false;
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
            'titre' => 'required|max:30|min:4',
            'description' => 'required|max:500|min:10',
            'categorie' => 'required'
        ]);

        $article = Article::find($id);
        if ($request->hasFile('photo')) {
            
            $image = Storage::disk('public')->put('', $request->file('photo'));
            $article->photo = $image;
        }


        $article->titre = $request->input('titre');
        $article->description = $request->input('description');
        $article->users_id = Auth::id();
        $article->categories_id = $request->input('categorie');
        $article->valide = $request->input('valide');
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
