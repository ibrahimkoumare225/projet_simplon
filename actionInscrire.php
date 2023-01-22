<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=simplon;charset=utf8;','root','');
}
catch(Exception $e)
{
    die("Une erreur a été détecté:".$e->getMessage());
}

// validation du formulaire
if(isset($_POST['validate']))
{

 // on verifie que l'utilisateur a bien rempli toutes les informations du formulaire d'inscription
 
    if(!empty($_POST['nom'])  AND !empty($_POST['prenom']) AND !empty($_POST['numero'] AND !empty($_POST['email'])))
    {
      
        $insertUserOnWebsite = $bdd->prepare('INSERT INTO coordonnée( nom,prenom,numero,email)VALUES(?,?,?,?)');
        $insertUserOnWebsite->execute(array( $_POST['nom'], $_POST['prenom'], $_POST['numero'], $_POST['email']));
        
       $successMsg = "Inscription reussie";
    }

    else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
