<?php
$connexion = new mysqli('localhost','root','','cinéma');
$requete="INSERT INTO film(titre, durée) VALUES('chat 3','3:09:18')";
$connexion->query($requete);
$requete="SELECT * FROM film";
$films = $connexion->query($requete);
foreach($films as $film){
    echo $film['titre']." ".$film['durée'];
}
?>