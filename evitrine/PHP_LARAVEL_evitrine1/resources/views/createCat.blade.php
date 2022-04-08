@extends('backend')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'une categorie</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('save') }}" method="post">
                    @csrf
                    <div class="field">
                        <label class="label">Categorie</label>
                        <div class="control">
                          <input class="input @error('nomCat') is-danger @enderror" type="text" name="nomCat" value="{{ old('nomCat') }}" placeholder="libelle">
                        </div>
                        @error('nomCat')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Slug</label>
                        <div class="control">
                          <input class="input" type="text" name="slug" value="{{ old('slug') }}" >
                        </div>
                        @error('slug')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Créer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection