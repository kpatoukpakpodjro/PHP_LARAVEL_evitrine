@extends("backend")

@section('titre')
Ajouter article
@endsection

@section('content') ;
<form action="{{ route('article.create') }}" method="POST">
    <div class="field">
        <label class="label">Catégorie</label>
        <div class="select">
            <select name="categorie_id">
                @foreach($categorie as $categorie)
                    <option value="{{ $categorie->idCat }}">{{ $categorie->nomCat }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="nom" type="text" name="" id="">nom Article</label></br>
        <input type="text" name="nomArt" value="nom" />
    </div>
    <div class="form-group">
        <label for="">prixU</label></br>
        <input class="form-control" type="text" name="PU" id="" />
    </div>
    <div class="form-group">
        <label for="">quantite</label></br>
        <input class="form-control" type="text" name="qtite" id=""/>
    </div>
    <div class="form-group">
        <label for="">description</label></br>
        <textarea rows="7" cols="25" name="">Decrivez l'article ici</textarea><br />
    </div>
    <div class="form-group">
        <label for="">prix livraison</label></br>
        <input class="form-control" type="text" name="prixL" id=""/>
    </div>
    <div class="form-group">
        <label for="">date Expiration</label></br>
        <input class="form-control" type="date" name="datexp" id=""/>
        </br>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Enregistrer</button>
    </div>
</form>

@endsection