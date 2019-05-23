
<?php
/*$connection = pg_connect ('host=localhost port=5432 dbname=infothales user=postgres password=1604sab')
  or die ("Connection impossible avec PostGres -->" .pg_last_error($conn));*/

/*  $pdo = new PDO('pgsql:host=localhost; port=5432; dbname=infothales; user=postgres; password=1604sab');
  sleep(5);
  $stmt = $pdo->prepare('SELECT * FROM obs_temporaire')
  $stmt->execute();
  $pdo = null;
  sleep(60);*/
function connectBdd(){

$host_bdd='localhost';
$name_bdd='manipulationbdd';
$user_bdd='root';
$pass_bdd='';

  try{
    /*$bdd = new PDO ("pgsql:host=".$host_bdd.";dbname=".$name_bdd."", "".$user_bdd."", "".$pass_bdd."") or die(print_r($bdd->errorInfo()));*/
    $bdd = new PDO ("mysql:host=".$host_bdd.";dbname=".$name_bdd.", ".$user_bdd., .$pass_bdd."") or die(print_r($bdd->errorInfo()));
$bdd->exec("SET NAMES utf8");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }
  catch(Exeption $e){
   die("Erreur!".$e->getMessage());
  }
  
}

 ?>
