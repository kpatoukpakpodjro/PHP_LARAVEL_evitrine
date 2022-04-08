<?php
namespace App\Http\Controllers  ;

use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class categorieController extends Controller
{
    //
    // actions 

    public function index(){

        return view('categorie');

    }
    public function createCat()
    {
        return view('createCat');
    }

    public function save(Request $request){

        categorie::create($request->all());
        return redirect()->route('index')->with('info', 'categorie créé');

    /* recuperation des params depuis le formulaire
        $nom =  $request['nomCat'];
        $slug =  $request['slug'];

        // Tinker et model
        $categorie = new categorie();

        $categorie->nomCat = $nom ;
        $categorie->slug =  $slug ;

        $categorie->save();
        // redirection 
        //return "Personne saved Personne[ ".$nom .",".$prenom .",".$age ."]" ;
        //return Redirect::route('show',['nom'=>$nom ,'prenom'=>$prenom , 'age'=>$age ] );*/
}

//https://www.digitalocean.com/community/tutorials/simple-laravel-crud-with-resource-controllers
public function showcategorie(Request $request){

    $id = $request['idCat'] ;
    $nom =  $request['nomCat'];
    $slug =  $request['slug'];

    // redirection 
    return view("showcategorie", ['idCat' =>$id , 'nomCat'=>$nom  , 'slug'=>$slug]);

}


public function delete(Request $request){

    $id =  $request['idCat'];
    $categorie = new categorie();

    $categorie->find($id)->delete();

    return Redirect::route('list');
}

}