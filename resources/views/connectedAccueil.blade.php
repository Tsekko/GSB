@extends('template')

@section('title', 'Accueil')

@section('content')
@foreach($ConnectedUsers as $user)
<p>Bonjour {{$user->VIS_PRENOM}} {{$user->VIS_NOM}}</p>
@endforeach
@endsection