<?php
include('test_connect.php');
echo '<meta http-equiv="refresh" content="0.1;url=./index.html"/>';
if(!isset($_SESSION))
{
	session_start();
}
$_SESSION = array();
unset($_SESSION["identifiant"]);
unset($_SESSION["matricule"]);
setcookie("identifiant", "", 1);
setcookie("matricule", "", 1);
session_destroy();
//echo "Redirection vers la <a href='./index.html'>page de connexion</a> !";

 ?>
