<?php
//session_start();
//include('test_connect.php');
?>


<!doctype html>
<html lang="fr">
<head>
	<title>Acceuil GSB</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/jquery-ui.css">

	<link rel="stylesheet" href="css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="css/aos.css">

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">




</head>

<!-- Contenu du site -->
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<div class="site-wrap"  id="accueil">

		<!-- Barre de navigation pour mobile-->
		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
		<!--	<div class="col-12 col-md-10 main-menu">-->
		<nav class="site-navigation position-relative text-right" role="navigation">
			<div class="navbar-header">
				<img src="img/logo.jpg"/>
			</div>

			<!-- zone de recherche-->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="col-sm-3 col-md-3">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Rechercher un praticien">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
				</div>
				<!-- Fin zone de recherche-->
				<ul class="nav navbar-nav">
					<li><a href="ajout.php" class="nav-link">Ajouter un praticien</a></li>
					<li><input type="submit" class="fadeIn fourth" value="Déconnexion"></li>
				</ul>
			</nav>



			<div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>



			<!-- Section 1 - couverture -->
			<section class="site-section bg-light" id="presentation">
				<div class="container">
					<div class="row mb-5">
						<div class="col-12 text-center">
							<!-- Les lignes en alternance (table-striped), tableaux encadrés (table-bordered)
							et survol des lignes (table-hover)-->
							<h2 class="section-title mb-3">Résultat de la recherche </h2>
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>Spécialité</th>
										<th>Nom</th>
										<th>Prénom</th>
										<th>Adresse</th>
										<th>Tél</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>La nuit</td>
										<td>Bidule</td>
										<td>234</td>
										<td>02 96 84 23 98</td>
									</tr>
									<tr>
										<td>2</td>
										<td>L'aube</td>
										<td>Truc</td>
										<td>194</td>
										<td>02 96 84 23 98</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Le jour</td>
										<td>Machin</td>
										<td>334</td>
										<td>02 96 84 23 98</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Le crépuscule</td>
										<td>Tartempion</td>
										<td>234</td>
										<td>02 96 84 23 98</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>



	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/main.js"></script>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>

</html>
