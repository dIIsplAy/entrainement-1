<?php

$contact = array('Panam', 'Judy', 'Takemura', 'Jhonny');

for($numero = 0; $numero <5; $numero++){
    echo $contact[$numero]. '<br />';
}


$cyberpunk = array(
    'prenom'=> 'V',
    'nom'=>'Mercenaire',
    'ville'=>'Night City',
    'sex'=>'masculin',

);

$data = array_search('V', $cyberpunk);
echo $data;

echo '<br />';

foreach($cyberpunk as $cle => $value){
    echo '['. $cle . '] vaut ' . $value . '<br />';
}

if(array_key_exists('prenom', $cyberpunk)){

    echo 'la clef est présente';
}else{
    echo' desolé la clef na pas été trouvé';
}

echo '<br />';

if(in_array('rouge', $cyberpunk)){

    echo 'La couleur est présente';
}else{
    echo 'desolé data non trouvé';
}
?>


