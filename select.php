<!DOCTYPE html>
<html>


include("bdd.php");

$requete = $bdd->prepare('SELECT * FROM ETUDIANTS'); 
$requete->execute();

While($donnees = $requete->fetch())
{
    echo "Nom : ".$donnees['nomEtudiant'];
    echo "Prenom : ".$donnees['prenomEtudiant'];
}

$requete->closeCursor();







<?php

include("bdd.php");

$nomRecherche = "JANNETEAU";

$requete = $bdd->prepare("SELECT * FROM ETUDIANTS WHERE nomEtudiant = :nomRecherche"); 
$requete->bindValue(":nomRecherche",$nomRecherche,PDO::PARAM_STR);
$requete->execute();

While($donnees = $requete->fetch())
{
    echo "Nom : ".$donnees['nomEtudiant'];
    echo "Prenom : ".$donnees['prenomEtudiant'];
}

$requete->closeCursor();

?>








</html>
