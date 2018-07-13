@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->

      @section('title', 'Clients Rikudo Media')
        <h1 class="text-center">Clients Rikudo Media</h1><br>

      <div class="card-columns">

      @foreach($clientRms as $clientRm)


        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/usersPhotos/{{$clientRm->image}}" alt="Card image cap">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $clientRm->nom }}</h4>
            <p class="card-text"> {{ $clientRm->email }} </p>
            <a href="{{ route('clientRms.show', $clientRm) }}" class="btn btn-primary">Voir profile</a>
          </div>
        </div>


      @endforeach

      </div>
      {{ $clientRms->links() }}


  @endsection
