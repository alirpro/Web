<!DOCTYPE html>

<html>
	<head>
		<title>Exemple de page dynamique</title>
		<meta charset = "utf-8" />
	</head>
	
	<body>
		<p>
			<!-- commentaire HTML -->
		Combien font 2+2 ? Cela fait
		<?php 
		/* commentaire PHP */
		echo 2+2;
		echo "\n";
		
		$x = 1;
echo gettype($x);
		?>
		</p>
	</body>
</html>
