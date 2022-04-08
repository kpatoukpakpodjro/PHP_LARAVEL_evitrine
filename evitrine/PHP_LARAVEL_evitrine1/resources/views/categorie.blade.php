@extends("backend")

@section('titre')
Ajouter Categorie
@endsection

@section('content') ;
<form action="/save" method="$_POST">
    <div class="form-group">
        <label for="nom" type="text" name="" id="">nom categorie</label></br>
        <input type="text" name="nomCat" value="nom" />
    </div>
    <div class="form-group">
        <label for="">slug</label></br>
        <input class="form-control" type="text" name="slug" id="" />
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary">Enregistrer</button>
    </div>
</form>

@endsection