<?php
/*
Php po
par Sabrina Cos
Dernière modification : 03-06-2019
*/

//Test si une session existe
include('test_connect.php');

//Récupération les les données de connexion à la base de donnée
include('./connexion_bdd.php');

  $nom = htmlspecialchars(trim($_POST['recherche'])).'%';
  //$prenom = htmlspecialchars(trim($_POST['prenom'])).'%';
  //$adresse = htmlspecialchars(trim($_POST['adresse'])).'%';
  //$code_post = htmlspecialchars(trim($_POST['codpost'])).'%';
  //$ville = htmlspecialchars(trim($_POST['ville'])).'%';
  //$specialite = htmlspecialchars(trim($_POST['specialite'])).'%';
}


  try{
    //Connexion à la bdd
    $bdd = new PDO('mysql:host='.$host.';dbname='.$database. ';charset=utf8', $user, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // En cas d'erreur, on affiche un message et on arrête tout
  }catch(Exception $e){
    echo "Problème :".$e->getMessage();
  }

  //Exécution d'une requête préparée en liant des variables PHP
  //Requête par nom de praticien rangé par ordre alphabétique et listant 50 praticiens maximum
  try{
    $sql = $bdd->prepare("SELECT ");
    $sql->bindParam(':nom',$nom);
    $sql->execute();

    //Affichage de la liste récupérée par la requête dans le tableau
    foreach ($sql->fetchAll() as $row){

      echo "<tr>";
      echo "<td>";
      echo $row['PRA_NOM_PRATICIEN'];
      echo "</td>";
      echo "<td>";
      echo $row['PRA_PRENOM_PRATICIEN'];
      echo "</td>";
      echo "<td>";
      echo $row['PRA_ADRESSE_PRATICIEN'];
      echo "</td>";
      echo "<td>";
      echo $row['PRA_CP_PRATICIEN'];
      echo "</td>";
      echo "<td>";
      echo $row['PRA_VILLE_PRATICIEN'];
      echo "</td>";
      echo "<td>";
      echo $row['TYP_CODE_TYPE_PRATICIEN'];
      echo "</td>";
      echo "</tr>";
    }

    echo "</table>";



    //Termine le traitement de la requête
    $sql->closeCursor();

  }catch(Exception $ex){

    echo "Erreur ".$ex->getMessage();

  }
}

?>
