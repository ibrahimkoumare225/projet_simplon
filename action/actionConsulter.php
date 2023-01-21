<?php
    include_once('action/database.php');


    //Récupérer les inscrits 
    $getAllInscrit = $bdd->query('SELECT id, nom, prenom, numero, email FROM coordonnée ORDER BY id ');
    

?>