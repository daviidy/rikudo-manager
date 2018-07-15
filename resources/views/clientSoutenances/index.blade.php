@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->
      @section('title', 'Clients Soutenance')
        <h1 class="text-center">Clients Soutenance</h1><br>

        <p>Chercher parmi les clients Soutenances</p>
               <div id="custom-search-input">
                 <form action="/searchSoutenance" method="POST" role="search">
                   {{ csrf_field() }}
                  <div class="input-group col-md-12">
                      <input type="text" name="q" class="  search-query form-control" placeholder="Chercher" />
                      <span class="input-group-btn">
                          <button type="submit" class="btn btn-danger" type="button">
                              <span class=" fa fa-search"></span>
                          </button>
                      </span>
                  </div>
                </form>
              </div><br>

              @if(isset($details))
              <p> Les résultats de recherche pour <b> {{ $query }} </b> sont :</p>

              <div class="card-columns">

              @foreach($details as $clientSoutenance)


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


              @endforeach

              </div>
              @elseif(isset($message))
              <p>{{ $message }}</p>
              @else


      <div class="card-columns">

      @foreach($clientSoutenances as $clientSoutenance)


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


      @endforeach

      </div>
      {{ $clientSoutenances->links() }}
      
@endif

  @endsection
