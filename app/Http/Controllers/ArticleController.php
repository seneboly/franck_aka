<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Http\Requests\createArticleRequest;

class ArticleController extends Controller
{

    public function __construct(){
        $this->middleware(['auth'])->except(['index', 'show']);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('pages.blog', [
                                    'categories'=>Category::with('posts')->paginate(8),
                                    'articles'=>Article::with(['category', 'galleries'])->where('status', true)->orderBy('created_at', 'desc')->paginate(10)
                                  ]
                   );
    }
    
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        
        return view('backoffice.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createArticleRequest $request)
    {
        $content = htmlentities($request->content);
        $slug = Str::words($request->title, 5);
        $article = Article::create(
            [
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'content'=>$content,
                'status'=>$request->status,
                'slug'=>Str::slug($slug),
                'category_id'=>$request->category_id
            ]);

        if(!empty($request->galleries)){

             $images = $request->file('galleries');

                foreach ($images as $img) {

                     $nom_photo = $img->getClientOriginalName();

                     $img->storeAs('img_articles', $nom_photo, 'local');

                     $img_saved = Gallery::create(['nom_image'=>$nom_photo]);
                     
            $article->galleries()->attach($img_saved);
        }


    }

    return redirect()->back()->with(['message'=>'Votre article a été créé avec succès.','class'=>'alert-success']);
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        

        return view('pages.article', compact('article'))
        ->with(
                [
                    'categories'=>Category::with('posts')->paginate(6),
                ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('backoffice.articles.edit',compact('article') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(createArticleRequest $request, Article $article)
    {
        $content = htmlspecialchars_decode($request->content);
        $slug = Str::words($request->title, 5);
               $article->update( 
                [
                    'title'=>$request->title,
                    'subtitle'=>$request->subtitle,
                    'content'=>$content,
                    'status'=>$request->status,
                    'slug'=>Str::slug($slug),
                    'category_id'=>$request->category_id
                ]
              );

            if(!empty($request->galleries)){

                 $images = $request->file('galleries');

                    foreach ($images as $img) {

                         $nom_photo = $img->getClientOriginalName();

                         $img->storeAs('img_articles', $nom_photo, 'local');

                         $img_saved = Gallery::create(['nom_image'=>$nom_photo]);
                         
                $article->galleries()->attach($img_saved);
            }


        }

        return redirect()->route('tous-les-articles')->with(['message'=>'Votre article a été modifié avec succès.','class'=>'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with(['message'=>'Votre article a été bien supprimé.','class'=>'alert-danger']);
    }

   

    public function blogArticle(){

        return view('backoffice.articles.index', ['articles'=>Article::with('category')
            ->orderBy('created_at', 'desc')->paginate(10)]);
    }

    public function getArticleByCat(Request $request, Category $categorie){

        $categories = Category::paginate(8);

        return view('pages.articles_by_cat', compact('categorie', 'categories'));
    }
}
