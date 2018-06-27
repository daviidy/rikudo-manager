@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->
      <div class="card-columns">
      @foreach($formateurs as $formateur)


        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/shoes.jpg" alt="Card image cap">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $formateur->nom }}</h4>
            <p class="card-text"> {{ $formateur->email }} </p>
            <p class="card-text"> {{ $formateur->cours }} </p>
            <a href="{{ route('formateurs.show', $formateur) }}" class="btn btn-primary">Voir profile</a>
          </div>
        </div>


      @endforeach
      </div> 
      {{ $formateurs->links() }}


  @endsection
