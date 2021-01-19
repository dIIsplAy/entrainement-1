<?php

$cyberpunkUser = array('V', 'Judy', 'Jhonny', 'Panam');

function helloUser($cyberpunkUser){
for($user = 0 ;$user <= 5; $user++){
    echo 'Bonjour '. $cyberpunkUser[$user] .' bienvenue a night city ! <br/>';
}
}

helloUser($cyberpunkUser);

echo '<br/>';



function calculVolumeCone($rayon, $hauteur){
$volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
return $volume;
}

$volume = calculVolumeCone(5, 2);
echo ' Le volume du cone de ' . $volume . '<br />';
