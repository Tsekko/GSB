@extends('template')

@section('title', 'Liste des praticiens')

@section('content')
<div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Praticiens...</button>
        <div class="dropdown-menu">
            @foreach ($prat as $praticien)
                <a class="dropdown-item" href="#">{{ $praticien->PRA_NOM }}
            @endforeach
        </div>
</div>
@endsection