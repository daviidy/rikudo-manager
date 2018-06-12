<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
</head>

<body>

  <div class="app">
  <div class="content">
    <div class="header hidden"></div>
    <div class="button">
      <div class="sign-up">Se connecter</div>
      <form class="hidden form">
        <input type="email" class="padding" placeholder="Email"/>
        <input type="password" class="padding" placeholder="Mot de passe"/>
      </form>
      <button class="submit hidden" ><a href="#" style="color:#000; text-decoration:none;">Ok</a></button>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('js/connexion js/index.js')}}"></script>




</body>

</html>
