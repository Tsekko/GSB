@extends('template')

@section('title', 'Liste des praticiens')

@section('content')
<div class="relative inline-flex">
  <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
  <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" id='practicien_select'>
    @foreach ($prat as $praticien)
    <option value={{ $praticien->PRA_NUM }}>{{ $praticien->PRA_NOM }} {{ $praticien->PRA_PRENOM }}</option>
    @endforeach
  </select>
</div>

  @foreach ($prat as $praticien)
  <div class='practicien_infos' id='info_pract_{{$praticien->PRA_NUM}}' style='display:none'>
    <table class="table-auto">
      <tbody>
      <tr>
        <th>Nom</th>
        <td>{{ $praticien->PRA_NOM }} {{ $praticien->PRA_PRENOM }}</td>
      </tr>
      <tr>
        <th>Adresse</th>
        <td>{{ $praticien->PRA_ADRESSE }} {{ $praticien->PRA_CP}} {{ $praticien->PRA_VILLE }}</td>
      </tr>
      <tr>
        <th>Notoriété</th>
        <td>{{ $praticien ->PRA_COEFNOTORIETE }}</td>
      </tr>
      <tr>
        <th>Type</th>
        <td>{{ $praticien->TYP_CODE}}</td>
      </tr>
      </tbody>
    </table>
  </div>
  @endforeach
@endsection