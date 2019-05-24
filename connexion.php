<?php
session_start();

	include_once('./connexion_bdd.php');

	if (isset($_COOKIE["identifiant"]) && isset($_COOKIE["matricule"])){
		$utilisateur = $_COOKIE["identifiant"];
		$pass = $_COOKIE["matricule"];
	}
	else{
		$utilisateur=$_POST["identifiant"];
		$pass=$_POST["matricule"];
	}

	try{
	$bdd = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);
	}
	catch(Exception $e){
		echo '<script>alert("Problème de connexion à la BDD")</script>';
		echo '<script>window.location.replace("./index.html");</script>';
	}

	$req = $bdd->prepare('SELECT utilisateur,pass FROM manipulationbdd_user WHERE utilisateur = :utilisateur');
	$req->execute(array(
		'utilisateur' => $utilisateur));	$req = $req->fetch();

	if ($password == $resultat['matricule']) {
	session_start();
	$_SESSION['identifiant'] = $utilisateur;
	setcookie('identifiant', $utilisateur);
	setcookie('matricule', $password);
	echo '<script>window.location.replace("./accueil.php");</script>';

}


?>
