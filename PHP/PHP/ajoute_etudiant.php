<!doctype html>

<head><title>Titre</title>
<meta charset="utf-8" />
</head>

<body>

<?php
// On crée des variables pour alléger l’écriture par la suite
$numero = $_POST['numero'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$filiere = $_POST['filiere'];
$fichier = fopen("etudiants.txt", "a");
fwrite($fichier,"$numero;$nom;$prenom;$filiere\n");
/* le \n est un saut de ligne :
comme ça, l’étudiant suivant sera ajouté sur une nouvelle ligne */
fclose($fichier);
?>
<p><a href="exfichiers.php">Afficher la liste des étudiants</a></p>

</body>
</html>
