<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rikudo Manager | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="uicookies.com" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

    <link rel="stylesheet" href="/aside/css/bootstrap.min.css">
    <link rel="stylesheet" href="/aside/css/open-iconic-bootstrap.min.css">

    <link rel="stylesheet" href="/aside/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/aside/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/aside/css/icomoon.css">
    <link rel="stylesheet" href="/aside/css/animate.css">
    <link rel="stylesheet" href="/aside/css/style.css">

  </head>
  <body>

    <aside class="probootstrap-aside js-probootstrap-aside">
      <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
      <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">

        <a href="index.html" class="mb-2 d-block probootstrap-logo">Rikudo Manager</a>
        <p class="mb-0">Pour gérer les clients de Rikudo SARL</p>
      </div>
      <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
          <ul>
            <li class="probootstrap-animate active" data-animate-effect="fadeInLeft"><a href="index.html">Accueil</a></li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown">
                Catégorie Clients
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Etudiants Oschool</a>
                <a class="dropdown-item" href="#">Formateurs Oschool</a>
                <a class="dropdown-item" href="#">Clients R. Technologies</a>
                <a class="dropdown-item" href="#">Clients R. Media</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown">
                Créer un Client
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Etudiants Oschool</a>
                <a class="dropdown-item" href="#">Formateurs Oschool</a>
                <a class="dropdown-item" href="#">Clients R. Technologies</a>
                <a class="dropdown-item" href="#">Clients R. Media</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown">
                Liste des Clients
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Etudiants Oschool</a>
                <a class="dropdown-item" href="#">Formateurs Oschool</a>
                <a class="dropdown-item" href="#">Clients R. Technologies</a>
                <a class="dropdown-item" href="#">Clients R. Media</a>
              </div>
            </li>
          <!--  <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="contact.html">Contact</a></li> -->
          </ul>
        </nav>
        <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
          <ul class="list-unstyled d-flex probootstrap-aside-social">
            <li><a target="_blank" href="#" class="p-2"><span class="icon-twitter"></span></a></li>
            <li><a target="_blank" href="#" class="p-2"><span class="icon-instagram"></span></a></li>
            <li><a target="_blank" href="#" class="p-2"><span class="icon-facebook"></span></a></li>
          </ul>
          <p>&copy; 2017 <a href="https://rikudotech.com/" target="_blank">Rikudo Technologies</a>. <br>Tous droits réservés.</p>
        </footer>
      </div>
    </aside>


    <main role="main" class="probootstrap-main js-probootstrap-main">
      <div class="probootstrap-bar">
        <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
        <div class="probootstrap-main-site-logo"><a href="index.html">Rikudo Manager</a></a></div>
      </div>


      @yield('content')









      <div class="container-fluid d-md-none">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-unstyled d-flex probootstrap-aside-social">
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
            </ul>
            <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a></p>
          </div>
        </div>
      </div>

    </main>



    <script src="/aside/js/jquery-3.2.1.slim.min.js"></script>
    <script src="/aside/js/popper.min.js"></script>
    <script src="/aside/js/bootstrap.min.js"></script>
    <script src="/aside/js/owl.carousel.min.js"></script>
    <script src="/aside/js/jquery.waypoints.min.js"></script>
    <script src="/aside/js/imagesloaded.pkgd.min.js"></script>

    <script src="/aside/js/main.js"></script>

  </body>
</html>
