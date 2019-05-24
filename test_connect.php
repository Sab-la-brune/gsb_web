<?php
	//Permet de vérifier si l'utilisateur est connecté, s'il ne l'est pas alors il est redirigé vers la page de connexion.
	if(!isset($_SESSION))
	{
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
