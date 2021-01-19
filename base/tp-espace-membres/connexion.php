<?php
include_once '../db-connection.php';

if (isset($_POST['pseudo'])) {

    $pseudo = $_POST['pseudo'];

    $req = $bdd->prepare('select id,pass from membre where pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo
    ));
    $result = $req->fetch();

    // echo $result['pass'];


    $isPasswordCorrect = password_verify($_POST['password'], $result['pass']);

    if (!$result) {
        echo 'mauvais pass';
    } else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $result['id'];
            print_r($_SESSION);
            $_SESSION['pseudo'] = $pseudo;
            // echo 'vous etes connecté';
            header('Location: index.php');
        } else {
            echo 'mots de passe ou identifiant incorrect';
        }
    }
}


?>


<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

    <h1>Espace membre</h1>

    <h1>Connexion</h1>

    <?php
    // if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
    //     echo 'Bonjour ' . $_SESSION['pseudo'];
    // } 
    ?>

    <div class="container">
        <div class="col-md-6 offset-md-3 ">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" placeholder="jhon">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <button type="submit" class="btn btn-outline-dark">envoyer</button>
            </form>
        </div>
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>