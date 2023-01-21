<?php

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=simplon;charset=utf8;','root','');
    }
    catch(Exception $e)
    {
        die("Une erreur a été détecté:".$e->getMessage());
    }
    
?>