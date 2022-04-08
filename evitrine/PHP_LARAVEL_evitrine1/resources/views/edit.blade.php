@extends('backend')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un article</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('update', $article->idArt) }}" method="put">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">article</label>
                        <div class="control">
                          <input class="input @error('nomArt') is-danger @enderror" type="text" name="nomArt" value="{{ old('nomArt', $article->nomArt) }}" placeholder="libelle">
                        </div>
                        @error('nomArt')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">prix</label>
                        <div class="control">
                          <input class="input" type="money" name="PU" value="{{ old('PU',$article->PU) }}" >
                        </div>
                        @error('PU')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">quantite</label>
                        <div class="control">
                          <input class="input" type="number" name="qtite" value="{{ old('qtite',$article->qtite) }}" min="1" >
                        </div>
                        @error('qtite')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">prix Livraison</label>
                        <div class="control">
                          <input class="input" type="money" name="prixLiv" value="{{ old('prixLiv',$article->prixLiv) }}" >
                        </div>
                        @error('prixLiv')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">delai</label>
                        <div class="control">
                          <input class="input" type="text" name="delai" value="{{ old('delai',$article->delai) }}" >
                        </div>
                        @error('delai')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">categorie</label>
                        <div class="control">
                          <input class="input" type="number" name="idCat" value="{{ old('idCat',$article->idCat) }}" >
                        </div>
                        @error('idCat')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Fiche technique</label>
                        <div class="control">
                            <textarea class="textarea" name="descriptionArt" placeholder="Description de l'article ">{{ old('descriptionArt',$article->descriptionArt) }}</textarea>
                        </div>
                        @error('descriptionArt')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection