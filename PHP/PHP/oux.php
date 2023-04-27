<!DOCTYPE html>

<html>
	
	<head>
		<title>Les mots en -ou qui font leur pluriel en -oux</title>
		<meta charset="utf-8" />
	</head>
	
	<body>
	<?php
	if (file_exists("oux.txt")) {
		$desc = fopen("oux.txt", "r"); // on ouvre le fichier en lecture
		echo "<ul>";
		while ($ligne = fgets($desc)) { // tant qu'on n'a pas atteint la fin du fichier
			  echo "<li>".rtrim($ligne)."</li>";
			  // rtrim permet de supprimer le caractère de fin de ligne
		}
		echo "</ul>";
	}
	?>
	</body>
	
</html>
