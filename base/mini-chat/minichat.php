<?php
include_once '../db-connection.php';

$response = $bdd->query('select name,message from chat order by userid DESC limit 0, 10');
?>
<form method="POST" action="minichat_post.php">
<label for="name" value="Nom">Nom </label>
<input type="text" name="name"  value=<?php 
if(isset($_COOKIE['pseudo'])){
    echo $_COOKIE['pseudo'];
}else{
    echo "jhon";
}
?>>
<label for="message">Chattez avec vos amies !</label>
<input type="text" name="message" placeholder="ecrivez votre text">
<input type="submit" value="Envoyer">
</form>

<div>
<?php

while($donnees =$response->fetch(PDO::FETCH_ASSOC))
{
    echo 'Pseudo : ' . htmlspecialchars($donnees['name']) .' | '. 'message:' . htmlspecialchars($donnees['message']) . '</br>';
}

?>

<form method="" action="minichat.php">
<input type="submit" value="Refresh chat">
</form>


</div>