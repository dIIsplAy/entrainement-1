<?php
include_once '../db-connection.php';

// Verification correspondence password

if (isset($_POST['password'])  && $_POST['password-repeat'] and $_POST['password'] === $_POST['password-repeat']) {
    // echo 'mots de passe identique';

    $resp = $bdd->query('select pseudo,email from membre');

    while ($data = $resp->fetch(PDO::FETCH_ASSOC)) {
        // echo $data['pseudo'] . '</br>';

        //Verification pseudo non présente en mbase de donée
        if (isset($_POST['pseudo']) and $_POST['pseudo'] === $data['pseudo']) {
            echo 'peusdo  deja existant';
            $new_user = false;
            break;
            // print_r($data);
        } else {
            $new_user = true;
        }
    }
    if ($new_user) {

        $pass_ash = password_hash($_POST['password'], PASSWORD_DEFAULT); //hache du mots de passe;

        $req = $bdd->prepare('insert into membre(pseudo, pass, email, date_inscription) values(:pseudo, :pass, :email, CURDATE())');

        $req->execute(array(
            'pseudo' => $_POST['pseudo'],
            'pass' => $pass_ash,
            'email' => $_POST['email']
        ));

        header('Location: connexion.php');
    }
}




?>

<h1>Inscription</h1>
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
            <div class="form-group">
                <label for="password-repeat">Retapez votre mots de passe</label>
                <input type="password" name="password-repeat">
            </div>
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" name="email">
            </div>
            <button type="submit" class="btn btn-outline-dark">envoyer</button>
        </form>
    </div>
</div>