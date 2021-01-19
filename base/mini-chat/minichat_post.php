<?php
include_once '../db-connection.php';


if(isset($_POST['name']) AND $_POST['message']){
    $name = $_POST['name'];
    
    $test = gettype($name);
    setcookie('pseudo', $name , time() + 365*24*3600, null, null, false, true);


    echo $test;
    
    $message = $_POST['message'];
    $add_data = $bdd->prepare('insert into chat(name,message) values(:name, :message)');
    $add_data->execute(array(
        'name' => $name,
        'message' => $message
    ));

    header('Location: minichat.php');

};



?>