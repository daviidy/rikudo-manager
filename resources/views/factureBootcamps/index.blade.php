@extends('layouts.header-facture')

@section('content')

<div class="table100 ver1 m-b-110">
  <div class="table100-head">
    <table>
      <thead>
        <tr class="row100 head">
          <th class="cell100 column1">Date</th>
          <th class="cell100 column2">Client</th>
          <th class="cell100 column3">Montant</th>
          <th class="cell100 column4">Reste</th>
          <th class="cell100 column5">Numéro</th>
        </tr>
      </thead>
    </table>
  </div>

  <div class="table100-body js-pscroll">
    <table>
      <tbody>
        @foreach($clientBootcamps as $clientBootcamp)
          @foreach($clientBootcamp->facture_bootcamps as $factureBootcamp)
        <tr class="row100 body">
          <td class="cell100 column1">{{$factureBootcamp->date_de_paiement}}</td>
          <td class="cell100 column2">{{$clientBootcamp->nom}}</td>
          <td class="cell100 column3">{{$factureBootcamp->montant_de_paiement}}</td>
          <td class="cell100 column4">{{$factureBootcamp->reste}}</td>
          <td class="cell100 column5">{{$clientBootcamp->numero}}</td>
        </tr>
        @endforeach
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
