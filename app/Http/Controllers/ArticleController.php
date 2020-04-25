<?php

namespace App\Http\Controllers;

use App\Article;
use App\Header;
use App\Titre;
use App\Footer;
use App\Categorie;
use App\Quote;
use App\Tag;
use App\Commentaire;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('redacteur')->except('index', 'indexDeux', 'show', 'search');
        // $this->middleware('redacteur')->only('indexBDD', 'create', 'store', 'edit', 'update', 'destroy');
        $this->middleware('webmaster')->only('indexBDDValide');
    }
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
        $commentaire = Commentaire::all();
        return view('blog', compact('header', 'titres' ,'footer', 'quote', 'tag', 'categorie', 'article', 'commentaire'));
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
        $tag = Tag::all();
        return view('article/ajoutArticle', compact('categorie', 'tag'));
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
            'categorie' => 'required',
            'tag' => 'required',
        ]);

        $image = Storage::disk('public')->put('', $request->file('photo'));

        $article = new Article();
        $article->photo = $image;
        $article->titre = $request->input('titre');
        $article->description = $request->input('description');
        $article->users_id = Auth::id();
        $article->categorie_id = $request->input('categorie');
        $article->valide = false;
        $article->save();
        foreach ($request->tag as $key) {
            $article->tags()->attach($key);
        }


        return redirect()->route('BlogBDD');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->authorize('view', Pokemon::class);
        $article = Article::all()->where('id', $id);
        $categorie = Categorie::inRandomOrder()->take(6)->get();
        $tag = Tag::inRandomOrder()->take(9)->get();
        $quote = Quote::inRandomOrder()->take(1)->get();
        $header = Header::all();
        $titres = Titre::first();
        $footer = Footer::all();
        $commentaire = Commentaire::where('article_id', $id)->inRandomOrder()->take(2)->get();
        return view('blogPost', compact('article', 'categorie', 'tag', 'quote', 'titres', 'header', 'footer', 'commentaire'));
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
        $tag = Tag::all();
        return view('article/editArticle', compact('article', 'categorie', 'tag'));
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
        $article->categorie_id = $request->input('categorie');
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
    public function search(Request $request) {

        $word = $request->input('word');

        $article = Article::where('titre', 'LIKE', '%'.$word.'%')->paginate(3);
        $categorie = Categorie::inRandomOrder()->take(6)->get();
        $tag = Tag::inRandomOrder()->take(9)->get();
        $quote = Quote::inRandomOrder()->take(1)->get();
        $header = Header::all();
        $titres = Titre::first();
        $footer = Footer::all();
        $commentaire = Commentaire::all();

        return view('blog', compact('article', 'categorie', 'tag', 'quote', 'titres', 'header', 'footer', 'commentaire'));
    }
}
