<?php

include('./connexion_bdd.php');

	$utilisateur=$_POST["identifiant"];
	$pass=$_POST["matricule"];

try{
	$bdd = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);
}

catch(Exception $e){
	echo '<script>alert("Problème de connexion à la BDD")</script>';
	echo '<script>window.location.replace("./index.html");</script>';
}



$req = $bdd->prepare('SELECT VIS_NOM_VISITEUR FROM visiteur WHERE VIS_MATRICULE_VISITEUR = :password');
$req->bindParam(':password',$pass);

$req->execute();
$resultat = $req->fetch();

if (!$resultat) {
	echo '<script>alert("Matricule inexistant ! '.$pass.'");</script>';
	echo '<script>window.location.replace("./index.html");</script>';
	//exit();
}

else{
	if ($utilisateur == $resultat['VIS_NOM_VISITEUR']) {
		session_start();
		$_SESSION['identifiant'] = $utilisateur;
		setcookie('identifiant', $utilisateur);
		setcookie('matricule', $pass);
		echo '<script>window.location.replace("./accueil.php");</script>';
	}

	else
	{
		echo '<script>alert("Nom d\'utilisateur inexistant !'.$utilisateur.'");</script>';

		echo '<script>window.location.replace("./index.html");</script>';

		//exit();
	}
}
?>
