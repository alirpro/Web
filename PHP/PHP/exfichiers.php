<!DOCTYPE html>
<html>

<head>
	<title>Affichage du fichier des étudiants</title>
	<meta charset="utf-8" />
	<meta name="generator" content="Geany 0.19.1" />
</head>

<body>

<?php
	if (file_exists("etudiants.txt")) {
    $desc = fopen("etudiants.txt", "r");
    echo "<table>";
    echo "<tr><th>Num&eacute;ro</th><th>Nom</th>";
    echo "<th>Pr&eacute;nom</th><th>Fili&egrave;re</th></tr>";
    while ($ligne = fgets($desc)) {
        echo "<tr>"; // 1 ligne du tableau pour chaque ligne du fichier
        $ligne = rtrim($ligne); // on supprime le caractère de fin de ligne
		$donnees = explode(";",$ligne); // on sépare les données
        foreach ($donnees as $d) {
            echo "<td>$d</td>";
        }
        echo "</tr>";
    }
	echo "</table>";
    fclose($desc);
}
else {
    echo "<p>Fichier introuvable</p>";
}
?>
	
</body>

</html>
