@extends('backend')

@section('content')
    <div class="card">
        <header class="card-header">
            @foreach ($article as $article )
            <p class="card-header-title">article : {{ $article->nomArt }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>prix : {{ $article->PU }} $</p>
                <p>Catégorie : {{ $categorie }} Sport</p> 
                <hr>
                <p>{{ $article->descriptionArt }}</p>
            </div>
        </div>
        @endforeach
        
    </div>
@endsection