<?php
/*Page d'accueil suite à la connexion et l'authentification à la base de donnée
par Sabrina Cos
Dernière modification : 03-06-2019
*/

//Test si une session existe
include('test_connect.php');

//Appel du fichier permettant l'affichage de la liste de praticiens
include('liste_praticien.php');
?>


<!doctype html>
<html lang="fr">
<head>
  <title>Accueil GSB</title>
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

  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">



</head>

<body onload="">

  <!-- En-tête du site -->
  <div class="container d-none d-lg-block">
    <div class="row">
      <div class="col-12 text-center mb-4 mt-5">
        <h2><a class="text-black h2 mb-0">Liste de praticiens<span class="text-primary"></span></a></h2>
      </div>
      <div class="col sm-3"><?php echo "<br>SESSION DE : ".$_SESSION['identifiant']."<br><br>"; ?></div>
      <!--Bouton pour déconnexion de la session active-->
      <form action="deconnexion.php" method="post">
        <div class="col sm-9 text-right"><input type="submit" class="fadeIn fourth" value="Deconnexion" name="deconnexion"></div>
      </form>
    </div>
  </div>



  <!-- Contenu du site -->
  <section class="site-section bg-light">

    <div class="container">
      <div class="row">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <!--  <div class="input-group">
          <div class="btn-group pull-right" data-toggle="buttons-radio">
          <button class="btn active">Par nom</button>
          <button class="btn">Par specialité</button>
        </div>
      </div>  -->

      <div class="col-lg-4">
        <form method="post" action="accueil.php">
          <input type="text" name="recherche" class="single-input" placeholder="Rechercher un praticien">
          <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </form>
      </div>



      <!--Tableau dans lequel s'afficheront les resultats de la recherche-->
      <table class="table table-striped table-bordered table-hover">
        <thead class="bg-black text-white">
          <tr>
            <th scope="col">Nom<div class="mt-10">
            </div></th>
            <th scope="col">Prenom<div class="mt-10">
            </div></th>
            <th scope="col">Adresse<div class="mt-10">
            </div></th>
            <th scope="col">Code Postal<div class="mt-10">
            </div></th>
            <th scope="col">Ville<div class="mt-10">
            </div></th>
            <th scope="col">Specialité<div class="mt-10">
            </div></th>
          </tr>
        </thead>


        <tbody>

          <?php
          //Permet d'afficher la liste des praticiens
          liste_praticien($nom);

          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <!--Bouton pour ajouter un praticien-->
    <form action="ajout_praticien.php" method="post">
        <div class="col-lg-4"><input type="submit" value="Aouter un praticien" name="ajout"></div>
    </form>
  </div>
</div>


</section>



<!--Script-->
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
