@extends('article/layout')

@section('content')
    <div class="row">
        {!! Form::open(['route' => 'articles.store']) !!}
        <div class="form-group">
            {!! Form::label('titre', 'Titre :') !!}
            {!! Form::text('titre', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('extrait', 'Extrait :') !!}
            {!! Form::text('extrait', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contenu', 'Contenu :') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Submit', ['class' => 'btn']) !!}
        {!! Form::close() !!}
    </div>
@endsection