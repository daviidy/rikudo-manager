<!DOCTYPE html>
<<<<<<< HEAD
<html lang="fr">
=======
<html lang="en">
>>>>>>> e5941221b550ae3bd37f5dea67fc5b6184b4fb03
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
<<<<<<< HEAD
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
=======
  <a class="navbar-brand" href="/">Rikudo Manager</a>

  <!-- Links -->
  <ul class="navbar-nav">
		<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Créer un client
      </a>
      <div class="dropdown-menu">
				<a class="dropdown-item" href="{{ route('clientOschools.create') }}">Etudiants Oschool</a>
				<a class="dropdown-item" href="{{ route('formateurs.create') }}">Formateurs Oschool</a>
				<a class="dropdown-item" href="{{ route('clientRts.create') }}">Clients R. Technologies</a>
				<a class="dropdown-item" href="{{ route('clientRms.create') }}">Clients R. Media</a>
				<a class="dropdown-item" href="{{ route('clientBootcamps.create') }}">Clients Bootcamp</a>
				<a class="dropdown-item" href="{{ route('clientSoutenances.create') }}">Clients Soutenances</a>
      </div>
    </li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Liste des clients
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="{{ route('clientOschools.index') }}">Etudiants Oschool</a>
				<a class="dropdown-item" href="{{ route('formateurs.index') }}">Formateurs Oschool</a>
				<a class="dropdown-item" href="{{ route('clientRts.index') }}">Clients R. Technologies</a>
				<a class="dropdown-item" href="{{ route('clientRms.index') }}">Clients R. Media</a>
				<a class="dropdown-item" href="{{ route('clientBootcamps.index') }}">Clients Bootcamp</a>
				<a class="dropdown-item" href="{{ route('clientSoutenances.index') }}">Clients Soutenances</a>
			</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Liste des factures
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="{{ route('factureOschools.index') }}">Factures Oschool</a>
				<a class="dropdown-item" href="{{ route('factureRts.index') }}">Factures R. Technologies</a>
				<a class="dropdown-item" href="{{ route('factureRms.index') }}">Factures R. Media</a>
				<a class="dropdown-item" href="{{ route('factureBootcamps.index') }}">Factures Bootcamp</a>
				<a class="dropdown-item" href="{{ route('factureSoutenances.index') }}">Factures Soutenances</a>
			</div>
		</li>
>>>>>>> e5941221b550ae3bd37f5dea67fc5b6184b4fb03
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
