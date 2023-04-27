<?php session_start();
$x = 1;
$_SESSION["nom"] = "Toto";
$_SESSION["age"]=42;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Une page</title>
		<meta charset="utf-8" />
	</head>

	<body>
		<p>
			<a href="p2.php">Suite...</a>
		</p>
	</body>
</html>
