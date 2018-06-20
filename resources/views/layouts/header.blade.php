<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rikudo Manager | @yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/css/util.css">
	<link rel="stylesheet" type="text/css" href="/templates-formulaires/css/main.css">
<!--===============================================================================================-->
</head>
<body>

  @yield('content')

  <!--===============================================================================================-->
  	<script src="/templates-formulaires/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/templates-formulaires/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/templates-formulaires/vendor/bootstrap/js/popper.js"></script>
  	<script src="/templates-formulaires/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/templates-formulaires/vendor/select2/select2.min.js"></script>
  	<script>
  		$(".selection-2").select2({
  			minimumResultsForSearch: 20,
  			dropdownParent: $('#dropDownSelect1')
  		});
  	</script>
  <!--===============================================================================================-->
  	<script src="/templates-formulaires/vendor/daterangepicker/moment.min.js"></script>
  	<script src="/templates-formulaires/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  	<script src="/templates-formulaires/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  	<script src="/templates-formulaires/js/main.js"></script>



  </body>
  </html>
