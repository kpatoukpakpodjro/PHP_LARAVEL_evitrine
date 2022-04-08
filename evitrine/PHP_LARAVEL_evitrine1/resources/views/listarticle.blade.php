@extends("backend")

@section('titre')
Les Categories
@endsection


@section('content')

<h1> Liste <article></article> </h1>

<table>
<th> idArt </th>
<th> nomArt </th>
<th> PrixUnit </th>
<th> Delete </th>
<th> Update </th>

@foreach($listcategorie as $categorie)
<tr>
<td>{{$article['idArt']}}</td>
<td>{{$article['nomArt']}}</td>
<td>{{$article['idCat']}}</td>
<td>{{$article['PU']}}</td>
<td><a href="/delete?id={{$article['idArt']}}">supprimer</a></td>
<td><a href="/update?id={{$article['idArt']}}">update</a></td>
<td></td>
<tr>
@endforeach

@endsection