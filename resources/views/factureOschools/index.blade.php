@extends('layouts.header-facture')

@section('content')

<h1 class="text-center">Factures Oschool</h1><br><br>

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
          @foreach($factureOschools as $factureOschool)
        <tr class="row100 body">
          <td class="cell100 column1">
              {{$factureOschool->clientOschool->nom}}
          </td>
          <td class="cell100 column2">{{ Carbon\Carbon::parse($factureOschool->date_de_paiement)->format('d-m-Y') }}</td>
          <td class="cell100 column3">{{$factureOschool->montant_de_paiement}}</td>
          <td style="font-weight: bold; color: {{ $factureOschool->reste != '0' ? '#F7761F' : "" }}" class="cell100 column4">{{$factureOschool->reste}}</td>
          <td class="cell100 column5">{{$factureOschool->clientOschool->numero}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{ $factureOschools->links() }}

@endsection
