<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Liste des Factures | @yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="facture/images/icons/image-profil.ico" />
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
		<a class="navbar-brand" href="/">Rikudo Manager</a>

		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Créer un Client
              </a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="{{ route('clientOschools.create') }}">Etudiants Oschool</a>
					<a class="dropdown-item" href="{{ route('formateurs.create') }}">Formateurs Oschool</a>
					<a class="dropdown-item" href="{{ route('clientRts.create') }}">Clients R. Technologies</a>
					<a class="dropdown-item" href="{{ route('clientRms.create') }}">Clients R. Media</a>
					<a class="dropdown-item" href="{{ route('clientBootcamps.create') }}">Clients Bootcamp</a>
					<a class="dropdown-item" href="{{ route('clientSoutenances.create') }}">Clients Soutenances</a>
					<a class="dropdown-item" href="{{ route('clientUniversites.create') }}">Clients Universités</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Liste des Clients
              </a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="{{ route('clientOschools.index') }}">Etudiants Oschool</a>
					<a class="dropdown-item" href="{{ route('formateurs.index') }}">Formateurs Oschool</a>
					<a class="dropdown-item" href="{{ route('clientRts.index') }}">Clients R. Technologies</a>
					<a class="dropdown-item" href="{{ route('clientRms.index') }}">Clients R. Media</a>
					<a class="dropdown-item" href="{{ route('clientBootcamps.index') }}">Clients Bootcamp</a>
					<a class="dropdown-item" href="{{ route('clientSoutenances.index') }}">Clients Soutenances</a>
					<a class="dropdown-item" href="{{ route('clientUniversites.index') }}">Clients Universités</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Liste des Factures
              </a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="{{ route('factureOschools.index') }}">Factures Oschool</a>
					<a class="dropdown-item" href="{{ route('factureRts.index') }}">Factures R. Technologies</a>
					<a class="dropdown-item" href="{{ route('factureRms.index') }}">Factures R. Media</a>
					<a class="dropdown-item" href="{{ route('factureBootcamps.index') }}">Factures Bootcamp</a>
					<a class="dropdown-item" href="{{ route('factureSoutenances.index') }}">Factures Soutenances</a>
					<a class="dropdown-item" href="{{ route('factureUniversites.index') }}">Factures Universités</a>
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
		$('.js-pscroll').each(function() {
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="facture/js/main.js"></script>

</body>

</html>
