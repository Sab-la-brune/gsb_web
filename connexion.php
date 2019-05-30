<?php
//Contrôle de l'authentification

//Récupération les les données de connexion à la base de donnée
include('./connexion_bdd.php');

//Récupération du nom et matricule transmis par le formulaire de connexion(index.html)
	$utilisateur=$_POST["identifiant"];
	$pass=$_POST["matricule"];

try{
//Connexion à la bdd
	$bdd = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);
}

catch(Exception $e){
	echo '<script>alert("Problème de connexion à la BDD")</script>';
	echo '<script>window.location.replace("./index.html");</script>';
}


// Exécution d'une requête préparée en liant des variables PHP
$req = $bdd->prepare('SELECT VIS_NOM_VISITEUR FROM visiteur WHERE VIS_MATRICULE_VISITEUR = :password');
$req->bindParam(':password',$pass);
$req->execute();
$resultat = $req->fetch();

//Message d'alerte si le matricule n'existe pas dans la base de donnée
//Redirection à la page d'authentification index.html
if (!$resultat) {
	echo '<script>alert("Matricule inexistant ! '.$pass.'");</script>';
	echo '<script>window.location.replace("./index.html");</script>';
}

//Authentification OK, redirection vers la page accueil.php
else{
	if ($utilisateur == $resultat['VIS_NOM_VISITEUR']) {
		//Démarre la session avant la redirection
		session_start();
		$_SESSION['identifiant'] = $utilisateur;
		setcookie('identifiant', $utilisateur);
		setcookie('matricule', $pass);
		echo '<script>window.location.replace("./accueil.php");</script>';
	}

	//Message d'alerte si le nom n'existe pas dans la base de donnée
	//Redirection à la page d'authentification index.html
	else{
		echo '<script>alert("Nom d\'utilisateur inexistant !'.$utilisateur.'");</script>';
		echo '<script>window.location.replace("./index.html");</script>';
	}
}
?>
