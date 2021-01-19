<?php 
include_once 'db-connection.php';

// $bdd->exec('insert into testt(name,date)values(\'titi\',\'2020-11-21\')'); requettes classqieu



//requette avec variable 
// $name="tutu";
// $date="2020-12-11";

// $req = $bdd->prepare('insert into testt(name,date) values(:name, :date)');
// $req->execute(array(
//     'name'=> $name,
//     'date'=>$date


// ));

// update elements

$bdd->exec('update testt set name = \'kpku\' where id = 2')or die(print_r($bdd->errorInfo()));//verifie les erreur si il y en a



echo 'data add to database';



?>