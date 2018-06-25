@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->


      @foreach($clientSoutenances as $clientSoutenance)

      <div class="card-columns">
        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/usersPhotos/{{$clientSoutenance->image}}" alt="Photo de l'étudiant">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $clientSoutenance->nom }}</h4>
            <p class="card-text"> {{ $clientSoutenance->email }} </p>
            <p class="card-text"> {{ $clientSoutenance->filiere }} </p>
            <a href="{{ route('clientSoutenances.show', $clientSoutenance) }}" class="btn btn-primary">Voir profil</a>
          </div>
        </div>
      </div>

      @endforeach


  @endsection
