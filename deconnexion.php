<?php
include('test_connecter.php');
echo '<meta http-equiv="refresh" content="0.1;url=./connexion.php"/>';
if(!isset($_SESSION))
{
	session_start();
}
$_SESSION = array();
unset($_SESSION["utilisateur"]);
unset($_SESSION["matricule"]);
setcookie("utilisateur", "", 1);
setcookie("matricule", "", 1);
session_destroy();
echo "Redirection vers la <a href='./index.tml'>page de connexion</a> !";

 ?>
