<?php 


/*if (isset ($_POST['Inscription'])){
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mail=$_POST['inscmail'];
	$mdp=$_POST['mp'];
	$dateb=$_POST['date'];
	$dbh->execute("INSERT INTO Utilisateur(ID_USER, Nom, Prenom, Adressmail, dateDN, MDP) VALUES('','$nom','$prenom','$mail','$mail','$dateb')");
}*/

if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['inscmail']))      $mail=$_POST['inscmail'];
else      $mail="";

if(isset($_POST['mp']))      $mdp=$_POST['mp'];
else      $mdp="";

if(isset($_POST['date']))      $dateb=$_POST['date'];
else      $dateb="";


$bdd = new PDO('mysql:host=localhost:8888;dbname=projetjubanna;charset=utf8', 'root', 'root');
$sql = "INSERT INTO Utilisateur(ID_USER, Nom, Prenom, Adressmail, dateDN, MDP) VALUES('','$nom','$prenom','$mail','$mail','$date')";
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 


?>