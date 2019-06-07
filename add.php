<?php
/*
Php po
par Sabrina Cos
Dernière modification : 05-06-2019
*/

//Test si une session existe
include('test_connect.php');

//Récupération les les données de connexion à la base de donnée
include('./connexion_bdd.php');

if(!empty($_POST)){
  extract($_POST);
//if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresseAdd']) && isset($_POST['email']))
  //    {

$nomAdd = htmlspecialchars(trim($_POST['nomAdd']));
$prenomAdd = htmlspecialchars(trim($_POST['prenomAdd']));
$adresseAdd = htmlspecialchars(trim($_POST['adresseAdd']));
$code_postAdd = htmlspecialchars(trim($_POST['codpostAdd']));
$villeAdd = htmlspecialchars(trim($_POST['villeAdd']));
$coefAdd = htmlspecialchars(trim($_POST['coefAdd']));
$typpraAdd = htmlspecialchars(trim($_POST['typpraAdd']));


}

try{
  //Connexion à la bdd
  $bdd = new PDO('mysql:host='.$host.';dbname='.$database. ';charset=utf8', $user, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // En cas d'erreur, on affiche un message et on arrête tout
}catch(Exception $e){
  echo "Problème".$e->getMessage();
}


/*if($_POST['nomAdd']=="") {
  echo "<script>history.go(-1);alert(\"Vous n'avez pas saisie le nom du praticien.\");</script>";
}elseif ($_POST['prenomAdd']==""){
  echo "<script>history.go(-1);alert(\"Vous n'avez pas saisie le prénom du praticien.\");</script>";
}else if($_POST['adresseAdd']=="" || $_POST['codpostAdd']=="" || $_POST['villeAdd']==""){
  echo "<script>history.go(-1);alert(\"Vous n'avez pas saisie l'adresse complète du praticien.\");</script>";
}else if($_POST['coefAdd']==""){
  echo "<script>history.go(-1);alert(\"Vous n'avez pas saisie le coefficient de notoriété.\");</script>";
}else if($_POST['typpraAdd']==""){
  echo "<script>history.go(-1);alert(\"Vous n'avez pas saisie le type du praticien.\");</script>";
}
else {	//Insertion des données
  $envoie_donnees = $bdd->prepare("INSERT INTO praticien (PRA_NUM_PRATICIEN, PRA_NOM_PRATICIEN, PRA_PRENOM_PRATICIEN,
    PRA_ADRESSE_PRATICIEN, PRA_CP_PRATICIEN, PRA_VILLE_PRATICIEN, PRA_COEFNOTORIETE_PRATICIEN, TYP_CODE_TYPE_PRATICIEN)
      VALUES(0, :nom, :prenom, :adresse, :codepostal, :ville, :coef, :typ);");
  $envoie_donnees -> execute();
  $resultat = $envoie_donnees->fetch();

  if(!$resultat){
    echo "<script>history.go(-1);alert(\"Praticien correctement enregistré.\");</script>";
    //header('location:accueil.php');

  }
  else{
    echo "<script>history.go(-1);alert(\"Données non enregistrées.\");</script>";
  }
}*/

//
//
try{
  $sql = $bdd->prepare("INSERT INTO praticien (PRA_NOM_PRATICIEN, PRA_PRENOM_PRATICIEN,
    PRA_ADRESSE_PRATICIEN, PRA_CP_PRATICIEN, PRA_VILLE_PRATICIEN, PRA_COEFNOTORIETE_PRATICIEN, TYP_CODE_TYPE_PRATICIEN)
    VALUES (:nom, :prenom, :adresse, :codpost, :ville, :coef, :typpra);");
    $sql->bindParam(':nom',$nomAdd);
    $sql->bindParam(':prenom',$prenomAdd);
    $sql->bindParam(':adresse',$adresseAdd);
    $sql->bindParam(':codpost',$code_postAdd);
    $sql->bindParam(':ville',$villeAdd);
    $sql->bindParam(':coef',$coefAdd);
    $sql->bindParam(':typpra',$typpraAdd);
    //$sql->bindParam(':specialiteAdd',$specialiteAdd);
    $sql->execute();




    //Termine le traitement de la requête
    $sql->closeCursor();
    echo '<script>window.location.replace("./accueil.php");</script>';

  }catch(Exception $e){

    echo "Problème".$e->getMessage();

  }


?>
