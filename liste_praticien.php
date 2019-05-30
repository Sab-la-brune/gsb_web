<?php
//

//
if(!empty($_POST)){
    extract($_POST);

$nom = htmlspecialchars(trim($_POST['nom'])).'%';
$prenom = htmlspecialchars(trim($_POST['prenom'])).'%';
$adresse = htmlspecialchars(trim($_POST['adresse'])).'%';
$code_post = htmlspecialchars(trim($_POST['cdopost'])).'%';
$ville = htmlspecialchars(trim($_POST['ville'])).'%';
$specialite = htmlspecialchars(trim($_POST['specialite'])).'%';

//
function liste_praticien(&$nom,&$prenom,&$adresse,&$code_post,&$ville,&$specialite){

  //Récupération les les données de connexion à la base de donnée
  include('connexion_bdd.php');

  try{
    //Connexion à la bdd
    $bdd = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // En cas d'erreur, on affiche un message et on arrête tout
  }catch(Exception $e){
    echo "Problème :".$e->getMessage();
  }

  //Exécution d'une requête préparée en liant des variables PHP
  //Requête par nom de praticien rangé par ordre alphabétique et listant 50 praiciens maximum
  $sql = $bdd->prepare("SELECT * FROM praticien where PRA_NOM_PRATICIEN LIKE '%".$_GET["nom"]."%' ORDER BY PRA_NOM_PRATICIEN ASC LIMIT 50");
    $req->bindParam(':nom',$nom);
    $req->bindParam(':prenom',$prenom);
    $req->bindParam(':prenom',$adresse);
    $req->bindParam(':codpost',$code_post);
    $req->bindParam(':ville',$ville);
    $req->bindParam(':specialite',$specialite);
    $req->execute();

    //Affichage de la liste récupérée par la requête dans le tableau
    foreach ($req->fetchAll() as $row){

      echo "<tr>";
      echo "<td>";
      echo $row['nom'];
      echo "</td>";
      echo "<td>";
      echo $row['prenom'];
      echo "</td>";
      echo "<td>";
      echo $row['adresse'];
      echo "</td>";
      echo "<td>";
      echo $row['codpost'];
      echo "</td>";
      echo "<td>";
      echo $row['ville'];
      echo "</td>";
      echo "<td>";
      echo $row['specialite'];
      echo "</td>";
      echo "</tr>";
    }
    echo "<table>";

  }

//Termine le traitement de la requête
$sql->closeCursor();

  ?>
