<?php
namespace App\Http\Controllers  ;

use App\Models\article;
use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class articleController extends Controller
{
   // actions 

   public function index(){

      /*$query = $slug ? categorie::whereSlug($slug)->firstOrFail()->article() : article::query();
      $article = $query->withTrashed()->oldest('title')->paginate(5);
      $categorie = categorie::all() ;
      return view('index', compact('article', 'categorie', 'slug'));*/

      //On va chercher tous les articles avec la méthode all du modèle,
      // on appelle la vue index en lui transmettant les articles.
      //$article = article::paginate(5);si jamais on a beaucoup d'elements,afficher 5/pages
      $categorie = categorie::all() ;
      $article = article::all();
      return view('index', compact('article','categorie'));
     }
   public function create(){
      /* $categories = categorie::all();
      return view('create', compact('categorie'));*/
      return view('create');
    } 

   public function store(Request $request)
   {
      article::create($request->all());
      //concernant la photo
      /*$image = $request->file('image') ;
      $image=$request->file('image')->store('public/');
      $photo = new article() ;
      $photo->image = $image ;
      $photo->save() ;*/

      return redirect()->route('index')->with('info', 'article créé');
   }

 //https://www.digitalocean.com/community/tutorials/simple-laravel-crud-with-resource-controllers
   public function show(article $article){
      $categorie = $article->categorie ;
      $article = article::all() ;
      //view("show" ,['nomArt'=>$article->nomArt  , 'PU'=>$article->PU , 'age'=>$article->descriptionArt]);
      return view('show', compact('article','categorie'));

      /*$categorie = $article->categorie->nomCat;    
     return view('show', compact('article', 'categorie'));*/
     // redirection 
     //return view("show", ['idArt' =>$id , 'nomArt'=>$nom  , 'PU'=>$pu , 'descriptionArt'=>$desc]);
   }


 /*public function list(Request $request){
    $article = new article();
    $listarticle = $article::all();
    
    // redirection 
    return view("listarticle" , ['listarticle'=>$listarticle] );
 }*/

 //update et edit vont nous permettre de modifier un article donné
   public function update(Request $request, article $article){
      $article->update($request->all());//enregistrer les modifs dans la base de donnees
      return redirect()->route('index')->with('info', ' article modifié');
   }
   //affiche le formulaire et update s'en charge de la modiffication
   public function edit(article $article){
      return view('edit', compact('article'));
   }


   public function delete(article $article){
      //$article->delete() ;
      article::where('idArt', $article->idArt)->delete();
     //$article->find(all())->delete();
     // back() permet de revenir a la meme page si l'action est executer
     //ici ce message sera afficher a la page grace a la redirection back()
      return back()->with('info', 'article supprimé avec succes dans la BD');
     //return redirect()->route('index')->with('info', 'article supprimé avec succes dans la BD');
   }
}