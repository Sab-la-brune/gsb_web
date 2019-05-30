<?php
	//Permet de vérifier si l'utilisateur est connecté
	//Si ce n'est pas la cas, il est redirigé vers la page de connexion index.html
	if(!isset($_SESSION))
	{
		//Démarre la session
		session_start();
	}
	if (!(isset($_SESSION["identifiant"])))
	{
		echo "Vous devez être connecté pour faire cela !<br>";
		echo "Redirection automatique vers la <a href='./index.html'>page de connexion</a>";
		echo '<script>window.location.replace("./index.html");</script>';
		exit();
	}
?>
