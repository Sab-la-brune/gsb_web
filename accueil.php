<?php
include('test_connect.php');
include('liste_affichage.php');
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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700">




</head>

<body onload="">

  <!-- En-tête du site -->
  <div class="container d-none d-lg-block">
    <div class="row">
      <div class="col-12 text-center mb-4 mt-5">
        <h2 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Liste de praticiens<span class="text-primary"></span> </a></h2>
      </div>
      <form action="deconnexion.php" method="post">
        <span class="col-12">
        <div class="col sm-3"><?php echo "<br>SESSION DE : ".$_SESSION['identifiant']."<br><br>"; ?></div>
        <div class="col sm-9 text-right"><input type="submit" class="fadeIn fourth" value="Deconnexion"></div>
      </span>
      </form>
      <!--<div class="col sm-3">le php a remettre</div> -->
      <!--<div class="col sm-9 text-right fadeIn fourth"><a class="fadeIn fourth" href="deconnexion.php" role="button">DECONNEXION</a></div>-->
    </div>
  </div>
</div>



<!-- Contenu du site -->
<section class="site-section bg-light">

  <div class="container">
    <div class="row">
      <table class="table table-striped table-bordered table-hover">
        <form method="post" action="accueil.php" >
          <thead class="bg-black text-white">
            <tr>
              <th scope="col" >Nom<div class="mt-10">
                <input type="text" name="nom" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'"  class="single-input" value"">
              </div></th>
              <th scope="col">Prenom<div class="mt-10">
                <input type="text" name="prenom" placeholder="Prenom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prenom'"  class="single-input">
              </div></th>
              <th scope="col">Departement<div class="mt-10">
                <input type="text" name="departement" placeholder="Département" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Département'" class="single-input">
              </div></th>
              <th scope="col">Ville<div class="mt-10">
                <input type="text" name="ville" placeholder="Ville" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ville'"  class="single-input">
              </div></th>
              <th scope="col">Specialité<div class="mt-10">
                <input type="text" name="specialite" placeholder="Spécialité" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Spécialité'"  class="single-input">
              </div></th>
            </tr>
          </thead>
          <div class="col sm-9 text-right"><input type="submit" class="fadeIn fourth" value="Rechercher" href=""></div>

        </form>

        <tbody>
          <?php

          affichage($nom,$prenom,$departement,$ville,$specialite);

          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="container">
    <div class="row d-flex pt-50">
      <div class="d-flex justify-content-between col-lg-12">
        <input type="submit" class="fadeIn fourth" value="Ajouter un praticien" href=""></div>
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
