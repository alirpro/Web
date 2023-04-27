<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Exemple PHP</title>
	<meta charset="utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>

<body>
	<?php
	echo "<p>";
	
	echo "<strong>Attention !</strong>\n C'est important !<br />";
	
	$tab = array (1,2,5,14,42);
	echo count($tab)."<br />"; // affiche : 5
	echo array_search(14,$tab)."<br />"; // affiche : 3
	echo array_pop($tab)."<br />"; // affiche : 42
	array_push($tab,28,56);
	echo implode(" et ",$tab)."<br />"; // affiche : 1 et 2 et 5 et 14 et 28 et 56
	
	print_r($tab);
	echo "<br />";
	
	foreach($tab as $val) {
		echo $val."<br />";
	}
	echo "</p>";
	
	echo "<dl>";
	$tab2 = array("nom"=>"Dupont","age"=>30);
	foreach ($tab2 as $cle=>$val) {
		echo "<dt>$cle</dt><dd>$val</dd>";
	}
	echo "</dl>";
	
	function factorielle($n) {
		$p = 1;
		for ($i = 1 ; $i <= $n ; $i++) {
			$p *= $i;
		}
		return $p;
	}
	
	echo "<ul>";
	for ($k = 0; $k <= 10 ; $k++) {
		echo "<li>$k! = ".factorielle($k)."</li>";
	}
	echo "</ul>";
	
	echo "<p>x = $x</p>";
	include "inclus.php";
	echo "<p>x = $x</p>";

?>
</body>

</html>
