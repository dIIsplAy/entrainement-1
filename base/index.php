<?php

include_once 'db-connection.php';

$data = $_GET['afg'];

// REQUETTE VEC MARQUEUR nominatif

$req = $bdd->prepare('SELECT * FROM country where code = :code AND continent  = :continent');
$req->execute(array('code' => 'afg', 'continent' => 'asia'));

echo '<ul>';
while($reqdata=$req->fetch())
{
    echo '<li>' . $reqdata['Name'] . '</li>';
}

echo '</ul>';

$req->closeCursor();






// REQUETTE VEC MARQUEUR



// $req = $bdd->prepare('SELECT * FROM country WHERE continent = ?');
// $req->execute(array('asia'));

// echo '<ul>';
// while($reqdata=$req->fetch())
// {
//     echo '<li>' . $reqdata['Name'] . '</li>';
// }

// echo '</ul>';

// $req->closeCursor();








// REQUETTES CLASSIC  MYSQL 


// $response = $bdd->query('SELECT * FROM country ORDER BY population DESC limit 0, 20');

// while($donnees = $response->fetch(PDO::FETCH_ASSOC))
// {
//     echo $donnees['Name'] .' '. $donnees['Population'] . '</br>';
// }

// $response->closeCursor();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); 
        // comentaire 1
        /* type commentaire 2*/
        ?>.</p>
        <?php echo "<h1>welcom \"toto\"</h1>"; ?>
    </body>
</html>