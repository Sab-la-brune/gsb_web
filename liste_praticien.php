<?php

function liste_praticien(&$nom,&$prenom,&$ville,&$specialite){
  include('connexion_bdd.php');

  try{
    $bdd = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(Exception $e){
    echo "Problème :".$e->getMessage();

  }

    $sql = $bdd->prepare("SELECT PRA_NOM_PRATICIEN as nom, PRA_PRENOM_PRATICIEN as prenom,
      PRA_VILLE_PRATICIEN as ville,TYP_LIBELLE_TYPE_PRATICIEN as type  FROM praticien,
      TYPE_PRATICIEN TP WHERE P.TYP_CODE_TYPE_PRATICIEN = TP.TYP_CODE_TYPE_PRATICIEN AND PRA_NOM_PRATICIEN LIKE :nom
      AND PRA_PRENOM_PRATICIEN LIKE :prenom AND PRA_VILLE_PRATICIEN LIKE :ville
      AND TYP_LIBELLE_TYPE_PRATICIEN LIKE :type ORDER BY nom ASC LIMIT 50");
      $req->bindParam(':nom',$nom);
      $req->bindParam(':prenom',$prenom);
      $req->bindParam(':ville',$ville);
      $req->bindParam(':specialite',$specialite);
      $req->execute();

      foreach ($req->fetchAll() as $row){

        echo "<tr>";
        echo "<td>";
        echo $row['nom'];
        echo "</td>";
        echo "<td>";
        echo $row['prenom'];
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


  ?>
