@extends('layouts.header-aside')

@section('content')

      <!--là ou les photos des etudiants vont apparaitre -->
@section('title', 'Etudiants Oschool')
  <h1 class="text-center">Etudiants Oschool</h1><br>

		<p>Chercher parmi les étudiants Oschool</p>
           <div id="custom-search-input">
             <form action="/searchOschool" method="POST" role="search">
               {{ csrf_field() }}
              <div class="input-group col-md-12">
                  <input type="text" name="q" class="  search-query form-control" placeholder="Chercher" />
                  <span class="input-group-btn">
                      <button type="submit" class="btn btn-danger" type="button" style="margin-top: 2px;
position: relative;
left: -28px;
margin-bottom: 0px;
color: rgb(217, 35, 15);
border-width: 0px;
border-style: initial;
border-color: initial;
border-image: initial;
background: none;
padding: 2px 5px;
border-radius: 3px;">
                          <span class=" fa fa-search"></span>
                      </button>
                  </span>
              </div>
            </form>
          </div><br> 

          @if(isset($details))
          <p> Les résultats de recherche pour <b> {{ $query }} </b> sont :</p>

        <div class="card-columns">

              @foreach($details as $clientOschool)
              <div class="card" style="width: 63%;">
                <a href="#">
                <img class="card-img-top probootstrap-animate" src="/img/usersPhotos/{{$clientOschool->image}}" alt="Photo de l'étudiant">
                </a>
                <div class="card-body">
                  <h4 class="card-title">{{ $clientOschool->nom }}</h4>
                  <p class="card-text"> {{ $clientOschool->numero }} </p>
                  <p class="card-text"> {{ $clientOschool->cours }} </p>
                  <a href="{{ route('clientOschools.show', $clientOschool) }}" class="btn btn-primary">Voir profil</a>
                </div>
              </div>
              @endforeach

          </div>

          @elseif(isset($message))
          <p>{{ $message }}</p>
          @else


<div class="card-columns">

      @foreach($clientOschools as $clientOschool)


        <div class="card">
          <a href="#">
          <img class="card-img-top probootstrap-animate" src="/img/usersPhotos/{{$clientOschool->image}}" alt="Photo de l'étudiant">
          </a>
          <div class="card-body">
            <h4 class="card-title">{{ $clientOschool->nom }}</h4>
            <p class="card-text"> {{ $clientOschool->numero }} </p>
            <p class="card-text"> {{ $clientOschool->cours }} </p>
            <a href="{{ route('clientOschools.show', $clientOschool) }}" class="btn btn-primary">Voir profil</a>
          </div>
        </div>


      @endforeach

</div>

{{ $clientOschools->links() }}

@endif


  @endsection
