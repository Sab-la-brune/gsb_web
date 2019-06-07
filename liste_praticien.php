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
function liste_praticien(&$nom){

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
    $sql = $bdd->prepare("SELECT * FROM praticien, type_praticien where praticien.TYP_CODE_TYPE_PRATICIEN=type_praticien.TYP_CODE_TYPE_PRATICIEN and PRA_NOM_PRATICIEN LIKE :nom ORDER BY :nom ASC LIMIT 50");
    $sql->bindParam(':nom',$nom);
    //$sql->bindParam(':prenom',$prenom);
    //$sql->bindParam(':prenom',$adresse);
    //$sql->bindParam(':codpost',$code_post);
    //$sql->bindParam(':ville',$ville);

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

  }catch(Exception $e){


    echo "Problème".$e->getMessage();

  }
}

?>
