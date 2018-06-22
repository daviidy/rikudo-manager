@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->


      @foreach($clientRms as $clientRm)

      <div class="card-columns">
        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/shoes.jpg" alt="Card image cap">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $clientRm->nom }}</h4>
            <p class="card-text"> {{ $clientRm->email }} </p>
            <a href="{{ route('clientRms.show', $clientRm) }}" class="btn btn-primary">Voir profile</a>
          </div>
        </div>
      </div>

      @endforeach


  @endsection
