<?php session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>
		SHARE MY HOUSE
	</title>

	
</head>
<body>
<?php 
// Sous MAMP (Mac)
$bdd = new PDO('mysql:host=localhost;dbname=projetjubanna;charset=utf8', 'root', 'root');
?>
<?php include("entate.php"); ?>
<p> on ecrit une phrase </p><br><br>
<form action="resultat.php" method="post" align="center" >
	ou allez vous : <input type="text" name="depart" /><br><br>
	date d'arriver: <input type="date"  name="date-arriver" min=strtotime("tomorrow") max="2100-01-01"><br><br>
	date de depart : <input type="date"  name="date-depat" min="2001-01-01" max="2100-01-01"><br><br>
	prix max : <input type="text" name="peix-max" /><br><br>
	Type de logement : <select name="type">
		<option value="type1">chambre</option>
			<option value="type2">logement entier</option>
		</select>
			<br><br>
				

	
    <input type="submit" value="valider" />

</form>






</body>
</html>