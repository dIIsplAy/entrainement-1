<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=world;charset=utf8', 'root', 'display');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


if(isset($_POST['auteur']) and $_POST['commentaire'] and $_POST['id_billet']){
    $auteur = $_POST['auteur'];
    $commentaire = $_POST['commentaire'];
    $id_billet = $_POST['id_billet'];
    $date = new DateTime('NOW');
    $date = $date->format('Y-m-d H:i:s');

    $req = $bdd->prepare('insert into commentaires(id_billet, auteur, commentaire, date_commentaire) values(:id_billet, :auteur, :commentaire, :date_commentaire) ');
    $req->execute(array(
        'id_billet'=> $id_billet,
        'auteur'=>$auteur,
        'commentaire'=>$commentaire,
        'date_commentaire'=> $date
    ));

    $req->closeCursor();

    header('Location: commentaires.php?billet=' . $id_billet );
}else{
    echo "erreur cant insert into db";
}








?>