<?php
//Page d'accueil suite à la connexion_bdd

//Test si une session existe
include('test_connect.php');

//Appel du fichier permettant l'affichage de la liste de praticiens
include('liste_praticien.php');
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

  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">



</head>

<body onload="">

  <!-- En-tête du site -->
  <div class="container d-none d-lg-block">
    <div class="row">
      <div class="col-12 text-center mb-4 mt-5">
        <h2 class="mb-0 site-logo"><a class="text-black h2 mb-0">Liste de praticiens<span class="text-primary"></span></a></h2>
      </div>
      <!--Bouton pour déconnexion de la session active-->
      <form action="deconnexion.php" method="post">
        <span class="col-12">
          <div class="col sm-3"><?php echo "<br>SESSION DE : ".$_SESSION['identifiant']."<br><br>"; ?></div>
          <div class="col sm-9 text-right"><input type="submit" class="fadeIn fourth" value="Deconnexion"></div>
        </span>
      </form>
    </div>
  </div>
</div>



<!-- Contenu du site -->
<section class="site-section bg-light">
  <form method="post" action="acceuil.php" >

    <div class="container">
      <div class="row">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <div class="col-sm-3 col-md-3">
            <form class="navbar-form" role="search" method="post" action="accueil.php">
              <div class="input-group">
                <div class="btn-group pull-right" data-toggle="buttons-radio">
                  <button class="btn active">Par nom</button>
                  <button class="btn">Par specialité</button>
                </div>
              </div>
                <div class="input-group">
                  <input type="search" class="form-control" placeholder="Rechercher un praticien" name="recherche">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
              </div>



              <!--Tableau dans lequel s'afficheront les resultats de la recherche-->
              <table class="table table-striped border table-hover">
                <thead class="bg-black text-white">
                  <tr>
                    <th scope="col" >Nom<div class="mt-10">
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
              </form>

              <tbody>

                <?php
                //Permet d'afficher la liste des praticiens
                liste_praticien($nom,$prenom,$adresse,$code_post,$ville,$specialite);

                ?>

              </tbody>
            </table>
          </div>
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
