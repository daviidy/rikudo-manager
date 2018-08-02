@extends('layouts.header-facture')

@section('content')

<h1 class="text-center">Factures Soutenance</h1><br><br>

<div class="table100 ver1 m-b-110">
  <div class="table100-head">
    <table>
      <thead>
        <tr class="row100 head">
          <th class="cell100 column1">Client</th>
          <th class="cell100 column2">Date</th>
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
        @foreach($clientSoutenances as $clientSoutenance)
          @foreach($clientSoutenance->factureSoutenances as $factureSoutenance)
        <tr class="row100 body">
          <td class="cell100 column1">
            @if ($loop->iteration == 1)
              {{$clientSoutenance->nom}}
            @endif
          </td>
          <td class="cell100 column2">{{ Carbon\Carbon::parse($factureSoutenance->date_de_paiement)->format('d-m-Y') }}</td>
          <td class="cell100 column3">{{$factureSoutenance->montant_de_paiement}}</td>
          <td style="font-weight: bold; color: {{ $factureSoutenance->reste != '0' ? '#F7761F' : "" }}" class="cell100 column4">{{$factureSoutenance->reste}}</td>
          <td class="cell100 column5">{{$clientSoutenance->numero}}</td>
        </tr>
          @endforeach
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{ $clientSoutenances->links() }}

@endsection
