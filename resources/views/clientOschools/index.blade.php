@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->

      <p>{{$clientOschools}}</p>

      @foreach($clientOschools as $clientOschool)

      <div class="card-columns">
        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/shoes.jpg" alt="Card image cap">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $clientOschool->nom }}</h4>
            <p class="card-text"> {{ $clientOschool->email }} </p>
            <p class="card-text"> {{ $clientOschool->cours }} </p>
            <a href="{{ route('clientOschools.show', $clientOschool) }}" class="btn btn-primary">Voir profile</a>
          </div>
        </div>
      </div>

      @endforeach


  @endsection
