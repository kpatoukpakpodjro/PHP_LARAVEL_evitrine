@extends('backend')
@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.9em;
        }
        .is-info {
            margin: 0.3em;
        }
        select, .is-info {
           margin: 0.3em;
        }
    </style>
@endsection
@section('content')
    @section('header')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
        <p class="card-header-title">articles</p>
        <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('index') }}" >Toutes catégories</option>
                @foreach($categorie as $categorie)
                    <option value="{{ route('categorie') }}"> 
                    <p> {{$categorie->nomCat}}
                    </option>
                @endforeach
            </select>
        </div>
            <a class="button is-info" href="{{ route('create') }}">Ajouer article</a>
            <a class="button is-info" href="{{ route('createCat') }}">Ajouter  categorie</a>
        </header>
        @endsection
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Article</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($article as $article)
                            <tr>
                                <td>{{ $article->idArt }}</td>
                                <td><strong>{{ $article->nomArt }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('show', $article->idArt) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('edit', $article->idArt) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('delete', $article->id) }}" method="get">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection