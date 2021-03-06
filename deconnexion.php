<?php
/*
Deconnexion de la session en cours
par Sabrina Cos
Dernière modification : 30-05-2019
*/

include('test_connect.php');
echo '<meta http-equiv="refresh" content="0.1;url=./index.html"/>';
if(!isset($_SESSION))
{
	session_start();
}
// Suppression des variables de session et de la session
$_SESSION = array();
unset($_SESSION["identifiant"]);
unset($_SESSION["matricule"]);

//Suppression des cookies de connexion automatique
setcookie("identifiant", "", 1);
setcookie("matricule", "", 1);

//Destruction de la session
session_destroy();

//Redirection vers la page de connexion index.html
echo "Redirection vers la <a href='./index.html'>page de connexion</a> !";

 ?>
