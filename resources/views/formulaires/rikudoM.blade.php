<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Formulaire des clients RikudoM</title>
      <link rel="stylesheet" href="{{asset('css/formulaire.css')}}">
</head>
<body>
  <hgroup>
  <h2 style="text-align:center; color:#2486b5;">Inscrire un client de Rikudo Média</h2>
</hgroup>
<form method="post" action="{{route('save_rms')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="group">
    <input name="nom" type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Nom</label>
  </div>
  <div class="group">
    <input name="prenom" type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Prénoms</label>
  </div>
  <div class="group">
    <input name="email" type="email"><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <div class="group">
    <input name="numero" type="number"><span class="highlight"></span><span class="bar"></span>
    <label>Numéro de téléphone</label>
  </div>
  <button type="submit" class="button buttonBlue">Envoyer
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('js/formulaire js/index.js')}}"></script>




</body>

</html>
