@extends('template')

@section('title', 'Mon profil')

@section('content')
@foreach($ConnectedUsers as $user)
<table class="table-auto">
  <thead>
    <tr>
      <th>Profil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Nom</th>
      <td>{{ $user->VIS_NOM }}</td>
    </tr>
    <tr class="bg-emerald-200">
      <th>Prénom</th>
      <td>{{ $user->VIS_PRENOM }}</td>
    </tr>
    <tr>
      <th>Adresse</th>
      <td>{{ $user->VIS_ADRESSE }} {{ $user->VIS_CP }} {{ $user->VIS_VILLE }}</td>
    </tr>
    <tr>
      <th>Date d'embauche</th>
      <td>{{ $user->VIS_DATEEMBAUCHE }}</td>
    </tr>
    @if($user->SEC_CODE!= null)
    <tr>
      <th>Code du secteur</th>
      <td>{{ $user->SEC_CODE }}</td>
    </tr>
    @endif
    <tr>
      <th>Code du laboratoire</th>
      <td>{{ $user->LAB_CODE }}</td>
    </tr>
  </tbody>
</table>
@endforeach
@endsection