<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=simplon;charset=utf8;','root','');
    }
    catch(Exception $e)
    {
        die("Une erreur a été détecté:".$e->getMessage());
    }
    

    //Récupérer les inscrits 
    $getAllInscrit = $bdd->query('SELECT id, nom, prenom, numero, email FROM coordonnée ORDER BY id ');
    

?>