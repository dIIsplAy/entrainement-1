<?php
$autorisation_entrer = true;

if ($autorisation_entrer == true)
{
    echo "Bienvenue petit nouveau. :o)";
}
elseif ($autorisation_entrer == false)
{
    echo "T'as pas le droit d'entrer !";
}
?>

<?php
$age = 8;
$langue = "français";


if ($age <= 12 && $langue == "français")
{
    echo "Bienvenue sur mon site !";
}
elseif ($age <= 12 && $langue == "anglais")
{
    echo "Welcome to my website!";
}
?>

<?php
$note = 20;

switch ($note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>