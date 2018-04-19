@extends('article/layout')

@section('content')
<div class="row">
    <table class="table">
        <tr>
            <th>id</th>
            <th>Titre</th>
            <th>Slug</th>
            <th>Editer</th>
        </tr>
        @foreach($article as $art)
        <tr>
            <td>{{$art->id}}</td>
            <td>{{$art->titre}}</td>
            <td>{{$art->slug}}</td>
            <td><a href="{{ route('articles.edit', $art->id) }}" class="btn btn-info">Edier</a></td>
        </tr>
        @endforeach
    </table>
</div>
<a href="{{route('articles.create')}}" class="btn">Ajouter</a>
@endsection