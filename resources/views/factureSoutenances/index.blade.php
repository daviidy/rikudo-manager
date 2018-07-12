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
          <th class="cell100 column5">Objet</th>
          <th class="cell100 column5">Numéro</th>
        </tr>
      </thead>
    </table>
  </div>

  <div class="table100-body js-pscroll">
    <table>
      <tbody>
        <tr class="row100 body">
          <td class="cell100 column1">Like a butterfly</td>
          <td class="cell100 column2">Boxing</td>
          <td class="cell100 column3">9:00 AM - 11:00 AM</td>
          <td class="cell100 column4">Aaron Chapman</td>
          <td class="cell100 column5">10</td>
          <td class="cell100 column5">10</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection
