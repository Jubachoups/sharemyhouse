<!--<?php session_start();
?>-->
<!DOCTYPE html>

<html>
<head>
	<title>
		SHARE MY HOUSE
	</title>

	<link rel='stylesheet' type='text/css' href='css/bandeau.css'>
</head>
<body>

<?php /*
// Sous MAMP (Mac)
$bdd = new PDO('mysql:host=localhost;dbname=projetjubanna;charset=utf8', 'root', 'root');
if (isset ($_POST['Inscription'])){
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mail=$_POST['inscmail'];
	$mdp=$_POST['mp'];
	$dateb=$_POST['date'];
	$dbh->execute("INSERT INTO Utilisateur(ID_USER, Nom, Prenom, Adressmail, dateDN, MDP) VALUES('','$nom','$prenom','$mail','$mail','$dateb')");
}*/
?> 

	<div id='bandeau'>
					<a href='acceuil1.php'><img src='img/logo.jpg' id='logo'></a>
					<a id='contact' href="mailto:hannahani@hotmail.com">Aide</a>
					<a id='texte'> SHARE MY HOUSE </a>
				</div>

	<div id='bandeauconnexion'>			

<h3 align="center"> Connexion</h3>
<p>
	<form action="acceuil2.php" method="post" align="center" >
	Adresse mail : <input type="text" name="adresse mail" /><br><br>
    votre mot de passe : <input type="password" name="password"/><br><br>

    <input type="submit" value="connexion" />

</form>
</p></div>



<div id='bandeaucreecompte' >
	<h3 align="center"> Créer un Compte</h3>
<p>
	<form  method="post" action="formulairea1.php" align="center" >
	Nom : <input type="text" name="nom" /><br><br>
	Prénom : <input type="text" name="prenom" /><br><br>
	Adresse mail : <input type="text" name="inscmail" /><br><br>
    Votre mot de passe : <input type="password" name="mp"/><br><br>
    Votre date de naissance : <input type="date"  name="date" min="1950-01-01" max="2100-01-01"><br><br>

    <input type="submit" value="Inscription" />

</form>
</p></div>





</body>
</html>