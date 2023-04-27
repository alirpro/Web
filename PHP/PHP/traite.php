<!DOCTYPE html>

<html>
	<head>
		<title>Titre</title>
		<meta charset="utf-8" />
	</head>

	<body>

	<?php
	switch ($_POST['sexe']) {
		case "M":
			echo "<p>Sois le bienvenu, {$_POST['prenom']} !</p>";
			break;
		case "F":
			echo "<p>Sois la bienvenue, {$_POST['prenom']} !</p>";
			break;
	}
	?>

	</body>

</html>
