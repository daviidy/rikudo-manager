@extends('layouts.header-facture')

@section('content')

<lang 
<h1 class="text-center">Factures Universités</h1><br><br>

<div class="table100 ver1 m-b-110">
  <div class="table100-head">
    <table>
      <thead>
        <tr class="row100 head">
          <th class="cell100 column1">Client</th>
          <th class="cell100 column2">Date</th>
          <th class="cell100 column3">Montant</th>
          <th class="cell100 column4">Reste</th>
        </tr>
      </thead>
    </table>
  </div>

  <div class="table100-body js-pscroll">
    <table>
      <tbody>
        @foreach($clientUniversites as $clientUniversite)
          @foreach($clientUniversite->factureUniversites as $factureUniversite)
        <tr class="row100 body">
          <td class="cell100 column1">
            @if ($loop->iteration == 1)
              {{$clientUniversite->nom}}
            @endif
          </td>
          <td class="cell100 column2">{{ Carbon\Carbon::parse($factureUniversite->date_de_paiement)->format('d-m-Y') }}</td>
          <td class="cell100 column3">{{$factureUniversite->montant_de_paiement}}</td>
          <td style="font-weight: bold; color: {{ $factureUniversite->reste != '0' ? '#F7761F' : "" }}" class="cell100 column4">{{$factureUniversite->reste}}</td>
        </tr>
          @endforeach
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{ $clientUniversites->links() }}

@endsection
