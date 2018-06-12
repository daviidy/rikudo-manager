<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Formulaire Formateurs</title>
      <link rel="stylesheet" href="{{asset('css/formulaire.css)}}">
</head>

<body>

  <hgroup>
  <h2 style="text-align:center; color:#2486b5;">Inscrire un Formateur</h2>
</hgroup>
<form style="width: 800px!important;">
  <div class="group">
    <input type="text" class="largeur"><span class="highlight "></span><span class="bar"></span>
    <label>Nom</label>
  </div>
  <div class="group left">
    <input type="text" class="largeur"><span class="highlight "></span><span class="bar"></span>
    <label>Prénoms</label>
  </div>
  <div class="group">
    <input type="email" class="largeur"><span class="highlight "></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <div class="group left">
    <input type="text" class="largeur"><span class="highlight "></span><span class="bar"></span>
    <label>Nationalité</label>
  </div>
  <div class="group">
    <input type="number" class="largeur"><span class="highlight "></span><span class="bar"></span>
    <label>Numéro de téléphone</label>
  </div>
  <div class="group left">
    <input type="number" class="largeur"><span class="highlight "></span><span class="bar"></span>
    <label>Compte paypal</label>
  </div>
  <div class="group">
    <input type="text"><span class="highlight "></span><span class="bar"></span>
    <label>Date de naissance(ex: jj/mm/aaaa)</label>
  </div>
  <div class="group form-group">
      <label for="sel1" class="marge">Genre:</label>
      <select class="form-control" id="sel1">
        <option>M</option>
        <option>F</option>
      </select>
    </div>
  <div class="group form-group">
      <label for="sel1" class="marge">Cours enseigné:</label>
      <select class="form-control" id="sel1">
        <option>Community Manager</option>
        <option>Développeur full stack</option>
        <option>Laboratoire CCNA 200 125 2018</option>
      </select>
    </div>
  <button type="submit" class="button buttonBlue">Envoyer
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('js/formulaire js/index.js')}}"></script>




</body>

</html>
