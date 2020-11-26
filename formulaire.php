<?php
try {
    $bdd = new PDO('mysql:db5000346099.hosting-data.io;dbname=dbs336507;charset=utf8', 'dbu461487', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video');

while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();
