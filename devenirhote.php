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
	<?php include("entate.php"); ?>


	<h2 align="center"> Devenire Hote</h2>

<form action="resultat.php" method="post" align="center" >
	type de logement : <input type="checkbox" name="case1" id="case1" /> <label for="case1">chambre</label>
					   <input type="checkbox" name="case2" id="case2" /> <label for="case2">logement entier</label><br><br>
	
	surface : <input type="text" name="surface" /><br><br>
	capacite: <input type="text" name="capacite" /><br><br>
	prix par nuit : <input type="text" name="peix-par-nuit" /><br><br>
	
	ville : <select name="ville">
		<option value="ville1">Amiens</option>
			<option value="ville2">Paris</option>
				<option value="ville3">Lyon</option>
		</select>
			<br><br>

			adresse : <input type="text" name="adresse" /><br><br>	
			
	
			

			<form method="post" enctype="multipaart/from-data">
				telecharger des photos de votre logement ici :<br> <input type="file" name="image" id="image">

<br><br><br><br>

 <input type="submit" value="valider" id="insert" />
</form>



</body>
</html>