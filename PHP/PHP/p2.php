<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Une autre page</title>
		<meta charset="utf-8" />
	</head>

	<body>
	<?php
	echo "<p>x = $x</p>"; /* affiche : x =
	(x n’est pas mémorisé) */
	echo "<p>Nom = {$_SESSION["nom"]}</p>"; // affiche : Nom = Toto
	echo "<p>Âge = {$_SESSION["age"]}</p>";
	?>
	</body>
</html>
