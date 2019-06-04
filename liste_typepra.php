<?php
/*
Fonction
par Sabrina Cos
Dernière modification : 04-06-2019
*/

//
if(!empty($_POST)){
  extract($_POST);

  $nom = htmlspecialchars(trim($_POST['recherche'])).'%';
  //$prenom = htmlspecialchars(trim($_POST['prenom'])).'%';
  //$adresse = htmlspecialchars(trim($_POST['adresse'])).'%';
  //$code_post = htmlspecialchars(trim($_POST['codpost'])).'%';
  //$ville = htmlspecialchars(trim($_POST['ville'])).'%';
  //$specialite = htmlspecialchars(trim($_POST['specialite'])).'%';
}
else{
  $nom='%';
}
//
function liste_typepra(&$nom){

  //Récupération des informations nécessaire pour la connexion à la base de donnée
  include('connexion_bdd.php');

  try{
    //Connexion à la bdd
    $bdd = new PDO('mysql:host='.$host.';dbname='.$database. ';charset=utf8', $user, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // En cas d'erreur, on affiche un message et on arrête tout
  }catch(Exception $e){
    echo "Problème".$e->getMessage();
  }

  //Exécution d'une requête préparée en liant des variables PHP
  //Requête par nom de praticien rangé par ordre alphabétique et listant 50 praticiens maximum
  try{
    $req_type= $bdd->prepare("SELECT * FROM type_praticien order by TYP_LIBELLE_TYPE_PRATICIEN asc");
    $req_type->execute();

    //Affichage de la liste récupérée par la requête dans le tableau
    foreach ($req_typ->fetchAll() as $row){


    }




    //Termine le traitement de la requête
    $req_type->closeCursor();

  }catch(Exception $e){

    echo "Problème".$e->getMessage();

  }
}

?>
