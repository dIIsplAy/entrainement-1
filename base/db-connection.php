<?php

try{

    $bdd = new PDO('mysql:host=localhost;dbname=world;charset=utf8', 'root','display', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '. $e->getMessage());
}

?>