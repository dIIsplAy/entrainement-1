
<?php 

if(isset($_POST['password']) AND $_POST['password'] === 'kangourou'){
    echo "Autorisation accepté </br>";
    echo "code nasa : 1834384874";


} else{
    header('Location: http://localhost:8000/tp-password/connection-nasa.php');
    exit();

  
}



?>