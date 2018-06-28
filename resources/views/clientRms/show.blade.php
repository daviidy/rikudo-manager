@extends('layouts.header-profile')

@section('title', $clientRm->nom)
@section('content')

  <div class="container">
    <div class="row my-2">
      <div class="col-lg-8 order-lg-2">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="/" class="nav-link" aria-expanded="false">Accueil</a>
          </li>
          <li class="nav-item">
            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active" aria-expanded="false">Profil</a>
          </li>
          <li class="nav-item">
            <a href="" data-target="#messages" data-toggle="tab" class="nav-link" aria-expanded="false">Messages</a>
          </li>
          <li class="nav-item">
            <a href="" data-target="#edit" data-toggle="tab" class="nav-link" aria-expanded="true">Modifier</a>
          </li>
          <li class="nav-item">
            <a href="" data-target="#factures" data-toggle="tab" class="nav-link" aria-expanded="false">Factures</a>
          </li>
          <li class="nav-item">
            <a href="" data-target="#delete" data-toggle="tab" class="nav-link" aria-expanded="false">Supprimer</a>
          </li>
        </ul>
        <div class="tab-content py-4">
          <div class="tab-pane active" id="profile" aria-expanded="false">
            <h5 class="mb-3">Profil Client</h5>
            <div class="row">
              <div class="col-md-6">
                <h6>A propos de {{$clientRm->nom}}</h6>
                <p>
                  Client Rikudo Média
                </p>
                <h6>Email</h6>
                <p>
                  {{$clientRm->email}}
                </p>
              </div>
              <div class="col-md-6">
                <h6>Recent badges</h6>
                <a href="#" class="badge badge-dark badge-pill">html5</a>
                <a href="#" class="badge badge-dark badge-pill">react</a>
                <a href="#" class="badge badge-dark badge-pill">codeply</a>
                <a href="#" class="badge badge-dark badge-pill">angularjs</a>
                <a href="#" class="badge badge-dark badge-pill">css3</a>
                <a href="#" class="badge badge-dark badge-pill">jquery</a>
                <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                <hr>
                <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
              </div>
              <div class="col-md-12">
                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Activités récentes</h5>
                <table class="table table-sm table-hover table-striped">
                  <tbody>
                    <tr>
                      <td>
                        A payé <strong>5 000 </strong>FCFA le <strong>`Discussions`</strong>. Il reste
                        à payer <strong>40 000 </strong> FCFA.
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            <!--/row-->
          </div>
          <div class="tab-pane" id="messages" aria-expanded="false">
            <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            <table class="table table-hover table-striped">
              <tbody>
                <tr>
                  <td>
                    <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus.
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


          <div class="tab-pane" id="edit" aria-expanded="true">
            <form enctype="multipart/form-data" role="form" action="{{ url('clientRms', $clientRm) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('patch') }}
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                <div class="col-lg-9">
                  <input name="nom" class="form-control" type="text" value="{{$clientRm->nom}}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Prénoms</label>
                <div class="col-lg-9">
                  <input name="prenoms" class="form-control" type="text" value="{{$clientRm->prenoms}}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                <div class="col-lg-9">
                  <input class="form-control" name="email" type="text" value="{{$clientRm->email}}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Numéro</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" value="{{$clientRm->numero}}" name="Numero">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Photo</label>
                <div class="col-lg-9">
                  <input type="file" name="image">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                  <input type="reset" class="btn btn-secondary" value="Annuler">
                  <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane" id="factures" aria-expanded="false">
          <form action="{{ route('factureRms.store') }}" method="post" role="form">
              {{ csrf_field() }}

              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Nom de l'étudiant</label>
                <div class="col-lg-9">
                  <select name="clientRm_id" class="form-control" style="">
                    <option value="{{ $clientRm->id }}">{{ $clientRm->nom }}</option>
                  </select>
                </div>
               </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Montant de paiement</label>
                <div class="col-lg-9">
                  <input class="form-control" required name="montant_de_paiement" type="text">
                </div>
               </div>
               <div class="form-group row">
                 <label class="col-lg-3 col-form-label form-control-label">Reste à payer</label>
                 <div class="col-lg-9">
                   <input class="form-control" required name="reste" type="text">
                 </div>
                </div>
               <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Date de paiement</label>
                <div class="col-lg-9">
                  <input class="form-control" required name="date_de_paiement" type="date">
                </div>
               </div>
               <button class="pull-right btn btn-primary" type="submit">Créer facture</button>
          </form>
          </div>

          <div class="tab-pane" id="delete" aria-expanded="false">
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">(Attention cette action est irréversible ! )</label>
                <form action="{{ route('clientRms.destroy', $clientRm) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-danger" type="submit">Supprimer ce compte étudiant</button>
                </form>

              </div>


          </form>
          </div>



        </div>
      </div>
      <div class="col-lg-4 order-lg-1 text-center">
        <img src="/img/usersPhotos/{{ $clientRm->image }}" class="mx-auto img-fluid img-circle d-block" alt="avatar">
      </div>
    </div>
  </div>

  @endsection
