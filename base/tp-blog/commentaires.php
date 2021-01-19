<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

 
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=world;charset=utf8', 'root', 'display');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération du billet
$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
$req->execute(array($_GET['billet']));
$donnees = $req->fetch();

if(!empty($donnees)){

    ?>
    
    <div class="news">
        <h3>
            <?php echo htmlspecialchars($donnees['titre']); ?>
            <em>le <?php echo $donnees['date_creation_fr']; ?></em>
        </h3>
        
        <p>
        <?php
        echo nl2br(htmlspecialchars($donnees['contenu']));
        ?>
        </p>
    </div>
    
    <h2>Commentaires</h2>
    
    <?php
    $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête
    
    // Récupération des commentaires
    $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
    $req->execute(array($_GET['billet']));
    
    while ($donnees = $req->fetch())
    
    {
      
    ?>
    <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
    <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
    <?php
    
    } // Fin de la boucle des commentaires
    $req->closeCursor();
}else{
        echo 'error no data found';
}
    ?>

<h3>Ajouter votre commentaires</h3>

        <div>
            <form method="POST" action="commentaire_post.php">
            <input type="hidden" name="id_billet" value="<?php echo $_GET['billet'] ?>" >
            <label for="auteur">Auteur</label>
            <input type="text"  name="auteur" placeholder="jhon">
            <label for="commentaire">Commentaire</label>
            <input type="text" name="commentaire">
            <input type="submit" value="envoyer">
            </form>
        </div>

</body>
</html>