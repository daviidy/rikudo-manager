@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->
      @section('title', 'Clients Bootcamp')
        <h1 class="text-center">Clients Bootcamp</h1><br>

      <div class="card-columns">

      @foreach($clientBootcamps as $clientBootcamp)


        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/usersPhotos/{{$clientBootcamp->image}}" alt="Photo de l'étudiant">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $clientBootcamp->nom }}</h4>
            <p class="card-text"> {{ $clientBootcamp->email }} </p>
            <p class="card-text"> {{ $clientBootcamp->numero }} </p>
            <a href="{{ route('clientBootcamps.show', $clientBootcamp) }}" class="btn btn-primary">Voir profil</a>
          </div>
        </div>


      @endforeach

      </div>
      {{ $clientBootcamps->links() }}


  @endsection
