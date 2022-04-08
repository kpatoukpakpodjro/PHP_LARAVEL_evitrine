@extends('backend')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un article</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" name="formName">
                    @csrf
                    <div class="field">
                        <label class="label">article</label>
                        <div class="control">
                          <input class="input @error('nomArt') is-danger @enderror" type="text" name="nomArt" value="{{ old('nomArt') }}" placeholder="libelle">
                        </div>
                        @error('nomArt')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">prix</label>
                        <div class="control">
                          <input class="input" type="money" name="PU" value="{{ old('PU') }}" >
                        </div>
                        @error('PU')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">quantite</label>
                        <div class="control">
                          <input class="input" type="number" name="qtite" value="{{ old('qtite') }}" min="1" >
                        </div>
                        @error('qtite')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">prix Livraison</label>
                        <div class="control">
                          <input class="input" type="money" name="prixLiv" >
                        </div>
                        @error('prixLiv')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">delai</label>
                        <div class="control">
                          <input class="input" type="text" name="delai" value="{{ old('delai') }}" >
                        </div>
                        @error('delai')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">categorie</label>
                        <div class="control">
                          <input class="input" type="number" name="idCat" value="{{ old('idCat') }}" >
                        </div>
                        @error('idCat')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Fiche technique</label>
                        <div class="control">
                            <textarea class="textarea" name="descriptionArt" placeholder="Description de l'article ">{{ old('descriptionArt') }}</textarea>
                        </div>
                        @error('descriptionArt')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row">
                      <div class="col-md-4"></div>
                       <div class="form-group col-md-4">
                       <input type="file" name="image" class="form-control">
                       </div>
                    </div>
                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection