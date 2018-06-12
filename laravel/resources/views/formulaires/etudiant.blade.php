<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Formulaire Etudiants</title>
  
  
  
      <link rel="stylesheet" href="{{asset('css/formulaire.css)}}">

  
</head>

<body>

  <hgroup>
  <h2 style="text-align:center; color:#2486b5;">Inscrire un étudiant</h2>
</hgroup>
<form>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Nom</label>
  </div>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Prénoms</label>
  </div>
  <div class="group">
    <input type="email" required><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <div class="group">
    <input type="number"><span class="highlight"></span><span class="bar"></span>
    <label>Numéro de téléphone</label>
  </div>
  <div class="group form-group">
      <label for="sel1" class="marge">Cours suivi:</label>
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

  

    <script  src="js/index.js"></script>




</body>

</html>
