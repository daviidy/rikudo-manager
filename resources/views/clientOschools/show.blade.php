@extends('layouts.header-profile')

@section('title', $clientOschool->nom)
@section('content')

  <div class="container">
    <div class="row my-2">
      <div class="col-lg-8 order-lg-2">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="" data-target="#profile" data-toggle="tab" class="nav-link" aria-expanded="false">Profile</a>
          </li>
          <li class="nav-item">
            <a href="" data-target="#messages" data-toggle="tab" class="nav-link" aria-expanded="false">Messages</a>
          </li>
          <li class="nav-item">
            <a href="" data-target="#edit" data-toggle="tab" class="nav-link active" aria-expanded="true">Modifier</a>
          </li>
        </ul>
        <div class="tab-content py-4">
          <div class="tab-pane" id="profile" aria-expanded="false">
            <h5 class="mb-3">Profil Client</h5>
            <div class="row">
              <div class="col-md-6">
                <h6>A propos de {{$clientOschool->nom}}</h6>
                <p>
                  Etudiant Oschool
                </p>
                <h6>Cours suivi</h6>
                <p>
                  {{$clientOschool->cours}}
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
                        S'est inscrit à la formation le <strong>{{ $clientOschool->created_at }}</strong>
                      </td>
                    </tr>
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
          <div class="tab-pane active" id="edit" aria-expanded="true">
            <form role="form" action="{{ url('clientOschools', $clientOschool) }}" method="post">
              {{ csrf_field() }} {{ method_field('patch') }}
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                <div class="col-lg-9">
                  <input name="nom" class="form-control" type="text" value="Jane">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Prénoms</label>
                <div class="col-lg-9">
                  <input name="prenoms" class="form-control" type="text" value="Bishop">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Email Oschool</label>
                <div class="col-lg-9">
                  <input class="form-control" name="email" type="email">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Cours</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" value="" name="cours">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Website</label>
                <div class="col-lg-9">
                  <input class="form-control" type="url" value="">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" value="" placeholder="Street">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-6">
                  <input class="form-control" type="text" value="" placeholder="City">
                </div>
                <div class="col-lg-3">
                  <input class="form-control" type="text" value="" placeholder="State">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                <div class="col-lg-9">
                  <select id="user_time_zone" class="form-control" size="0">
                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option value="Alaska">(GMT-09:00) Alaska</option>
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                </div>
              </div>
              <!--    <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="janeuser">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div> -->
              <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                  <input type="reset" class="btn btn-secondary" value="Annuler">
                  <input type="button" class="btn btn-primary" value="Enregistrer les modifications">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 order-lg-1 text-center">
        <img src="/img/shoes.jpg" class="mx-auto img-fluid img-circle d-block" alt="avatar">
        <h6 class="mt-2">Changer photo</h6>
        <label class="custom-file">
          <input type="file" id="file" class="custom-file-input">
          <span class="custom-file-control">Choisir fichier</span>
        </label>
      </div>
    </div>
  </div>

  @endsection
