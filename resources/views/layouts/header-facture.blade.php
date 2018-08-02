<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Liste des Factures | @yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="facture/images/icons/image-profil.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/css/util.css">
	<link rel="stylesheet" type="text/css" href="facture/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<nav class="navbar navbar-expand-sm menu">
  <!-- Brand -->
  <a class="navbar-brand" href="/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rikudo Manager</font></font></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Créer un client
      </font></font></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientOschools/create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etudiants Oschool </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/formateurs/create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formateurs Oschool </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientRts/create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clients R. Technologies </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientRms/create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clients R. Media </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientBootcamps/create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clients Bootcamp </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientSoutenances/create"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clients Soutenances</font></font></a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Liste des clients
      </font></font></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientOschools"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etudiants Oschool </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/formateurs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formateurs Oschool </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientRts"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clients R. Technologies </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientRms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clients R. Media </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientBootcamps"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clients Bootcamp </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/clientSoutenances"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clients Soutenances</font></font></a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Liste des factures
      </font></font></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="http://manager.rikudotech.com/factureOschools"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Factures Factures </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/factureRts"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oschool R. Factures Technologies </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/factureRms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R. </font></font></a>
        <a class="dropdown-item" href="http://manager.rikudotech.com/factureBootcamps"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Factures </font></font></a>
        <font style="vertical-align: inherit;"><a class="dropdown-item" href="http://manager.rikudotech.com/factureRms"><font style="vertical-align: inherit;">médias </font></a><a class="dropdown-item" href="http://manager.rikudotech.com/factureBootcamps"><font style="vertical-align: inherit;">Factures Bootcamp </font></a></font><a class="dropdown-item" href="http://manager.rikudotech.com/factureSoutenances"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soutenances</font></font></a>
      </div>
    </li>
  </ul>
</nav>




  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">

  @yield('content')

</div>
</div>
</div>


<!--===============================================================================================-->
<script src="facture/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="facture/vendor/bootstrap/js/popper.js"></script>
<script src="facture/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="facture/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="facture/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
$('.js-pscroll').each(function(){
var ps = new PerfectScrollbar(this);

$(window).on('resize', function(){
  ps.update();
})
});


</script>
<!--===============================================================================================-->
<script src="facture/js/main.js"></script>

</body>
</html>
