@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->


      @foreach($clientOschools as $clientOschool)

      <div class="card-columns">
        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/usersPhotos/{{$clientOschool->image}}" alt="Photo de l'étudiant">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $clientOschool->nom }}</h4>
            <p class="card-text"> {{ $clientOschool->email }} </p>
            <p class="card-text"> {{ $clientOschool->cours }} </p>
            <a href="{{ route('clientOschools.show', $clientOschool) }}" class="btn btn-primary">Voir profil</a>
          </div>
        </div>
      </div>

      @endforeach


  @endsection
