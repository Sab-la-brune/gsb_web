<?php
/*
Php po
par Sabrina Cos
Dernière modification : 04-06-2019
*/

//Test si une session existe
include('test_connect.php');

//Récupération les les données de connexion à la base de donnée
include('./connexion_bdd.php');

$nomAdd = htmlspecialchars(trim($_POST['nomAdd'])).'%';
$prenomAdd = htmlspecialchars(trim($_POST['prenomAdd'])).'%';
$adresseAdd = htmlspecialchars(trim($_POST['adresseAdd'])).'%';
$code_postAdd = htmlspecialchars(trim($_POST['codpostAdd'])).'%';
$villeAdd = htmlspecialchars(trim($_POST['villeAdd'])).'%';
$coefAdd = htmlspecialchars(trim($_POST['coefAdd'])).'%';
$specialiteAdd = htmlspecialchars(trim($_POST['specialiteAdd'])).'%';
}


try{
  //Connexion à la bdd
  $bdd = new PDO('mysql:host='.$host.';dbname='.$database. ';charset=utf8', $user, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // En cas d'erreur, on affiche un message et on arrête tout
}catch(Exception $e){
  echo "Problème".$e->getMessage();
}

//
//
try{
  $sql = $bdd->prepare("INSERT INTO praticien (PRA_NUM_PRATICIEN, PRA_NOM_PRATICIEN, PRA_PRENOM_PRATICIEN,
    PRA_ADRESSE_PRATICIEN, PRA_CP_PRATICIEN, PRA_VILLE_PRATICIEN, PRA_COEFNOTORIETE_PRATICIEN, )
    VALUES (0, :nom, :prenom, :adresse, :codepostal, :ville, :coef);");
    $sql->bindParam(':nom',$nomAdd);
    $sql->bindParam(':prenom',$prenomAdd);
    $sql->bindParam(':adresse',$adresseAdd);
    $sql->bindParam(':codpostAdd',$code_postAdd);
    $sql->bindParam(':villeAdd',$villeAdd);
    $sql->bindParam(':coefAdd',$coefAdd);
    $sql->bindParam(':specialiteAdd',$specialiteAdd);
    $sql->execute();




    //Termine le traitement de la requête
    $sql->closeCursor();

  }catch(Exception $e){

    echo "Problème".$e->getMessage();

  }
}

?>
