@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->

      @section('title', 'Clients Rikudo Technologies')
        <h1 class="text-center">Clients Rikudo Technologies</h1><br>

      <div class="card-columns">
      @foreach($clientRts as $clientRt)


        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/usersPhotos/{{$clientRt->image}}" alt="Card image cap">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $clientRt->nom }}</h4>
            <p class="card-text"> {{ $clientRt->email }} </p>
            <a href="{{ route('clientRts.show', $clientRt) }}" class="btn btn-primary">Voir profile</a>
          </div>
        </div>


      @endforeach
      </div>
      {{ $clientRts->links() }}


  @endsection
