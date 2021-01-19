<?php

$bdd = new PDO('mysql:host=localhost;dbname=world;charset=utf8', 'root','display', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$res=$bdd->query("select * from country where Name regexp '^[a]+[a-p]{6}'");

while($donnes=$res->fetch(PDO::FETCH_ASSOC)){
    echo $donnes['Name'].'</br>';
}

?>