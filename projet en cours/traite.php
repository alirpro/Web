<!DOCTYPE html>

<html>
	<head>
		<title>données</title>
		<meta charset="utf-8" />
	</head>

	<body>

	<?php
    echo 'Nom de famille : ' .$_POST["nom"]. '<br>' ;
    echo 'Prénom : ' .$_POST["prenom"]. '<br>' ;
    echo 'Email : ' .$_POST["login"]. '<br>' ;
    echo 'Mot de passe : ' .$_POST["password"]. '<br>' ;
    echo 'Date de naissance : ' .$_POST["birthdate"]. '<br>' ;
    echo 'genre : ' .$_POST["sexe"]. '<br>' ;

	?>

	</body>

</html>
