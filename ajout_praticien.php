<?php
/*

par Sabrina Cos
Dernière modification : 30-05-2019
*/

//Test si une session existe
	include('test_connect.php');
?>


<!doctype html>
<html lang="fr">
<head>
  <title>Acceuil GSB</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">


</head>
<body>
	<div id="formulaire">
		<h1>Ajout d'un praticien</h1>
		<h3>Veuillez renseigner tous les champs</h3>
	<form id="mainForm" action="ajout_praticien.php">
		<label for="code">Code</label><br />
        	<input type="text" id="code" class="champ" /><br /><br />
    	<label for="nom">Nom</label><br />
        	<input type="text" id="nom" class="champ" /><br /><br />
        <label for="prenom">Prénom</label><br />
        	<input type="text" id="prenom" class="champ" /><br /><br />
        <label for="adresse">Adresse</label><br />
        	<input type="text" id="adresse" class="champ" /><br /><br />
        <label for="codpost">Code Postal</label><br />
        	<input type="text" id="codePostal" class="champ" /><br /><br />
        <label for="ville">Ville</label><br />
        	<input type="text" id="ville" class="champ" /><br /><br />
			<label for="coef">Coefficient </label><br />
        	<input type="text" id="coef" class="champ" /><br /><br />
			<label for="typ">Type code </label><br />
        	<input type="text" id="typ" class="champ" /><br /><br />
    		<input type="submit" id="envoi" value="Envoyer" />
    		<input type="reset" id="rafraichir" value="Rafraîchir" />
	</form><br />
	<a href="accueil.php">Retour à la page d'accueil</a><br />
	</div>
</body>
</html>
