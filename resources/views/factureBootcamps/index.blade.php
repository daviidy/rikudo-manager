@extends('layouts.header-facture')

@section('content')

<h1 class="text-center">Factures Bootcamp</h1><br><br>

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
        @foreach($clientBootcamps as $clientBootcamp)
          @foreach($clientBootcamp->factureBootcamps as $factureBootcamp)
        <tr class="row100 body">
          <td class="cell100 column1">
            @if ($loop->iteration == 1)
              {{$clientBootcamp->nom}}
            @endif
          </td>
          <td class="cell100 column2">{{ Carbon\Carbon::parse($factureBootcamp->date_de_paiement)->format('d-m-Y') }}</td>
          <td class="cell100 column3">{{$factureBootcamp->montant_de_paiement}}</td>
          <td style="font-weight: bold; color: {{ $factureBootcamp->reste != '0' ? '#F7761F' : "" }}" class="cell100 column4">{{$factureBootcamp->reste}}</td>
          <td class="cell100 column5">{{$clientBootcamp->numero}}</td>
        </tr>
          @endforeach
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{ $clientBootcamps->links() }}

@endsection
