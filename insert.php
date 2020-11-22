<!DOCTYPE html>
<html>

<?php
Include 'bdd.php';

$nomExemple="PAYRAUDEAU";
$prenomExemple="Simon";
$telephoneExemple="0602020202";

$requete = $bdd->prepare('INSERT INTO ETUDIANTS (nomEtudiant,prenomEtudiant, telephoneEtudiant) VALUES(:nom, :prenom, :telephone)');
$requete->bindValue(":nom",$nomExemple, PDO::PARAM_STR);
$requete->bindValue(":prenom",$prenomExemple, PDO::PARAM_STR);
$requete->bindValue(":telephone",$telephoneExemple, PDO::PARAM_STR);
$requete->execute();

?>
</html>


