Les fonctions qui nous intéressent
Nous avons donc choisi PCRE. Il existe plusieurs fonctions utilisant le « langage PCRE » et qui commencent toutes par preg_ :

Comment faire si on veut que nos regex ne fassent plus la différence entre majuscules et minuscules ?
On va justement utiliser une option. C'est la seule que vous aurez besoin de retenir pour le moment. 
Il faut rajouter la lettre « i » après le 2e dièse, et la regex ne fera plus attention à la casse :


Le symbole OU

On va maintenant utiliser le symbole OU, que vous avez déjà vu dans le chapitre sur les conditions : c'est la barre verticale « | ».
Grâce à elle, vous allez pouvoir laisser plusieurs possibilités à votre regex. Ainsi, si vous tapez :

#guitare|piano#

… cela veut dire que vous cherchez soit le mot « guitare », soit le mot « piano ». Si un des deux mots est trouvé, la regex répond VRAI.
Voici quelques exemples :



Début et fin de chaîne
Les regex permettent d'être très très précis, vous allez bientôt vous en rendre compte.
Jusqu'ici, en effet; le mot pouvait se trouver n'importe où. Mais supposons que l'on veuille que la phrase commence ou se termine par ce mot.

Nous allons avoir besoin des deux symboles suivants, retenez-les :

^  (accent circonflexe) : indique le début d'une chaîne ;

$  (dollar) : indique la fin d'une chaîne.

Ainsi, si vous voulez qu'une chaîne commence par « Bonjour », il faudra utiliser la regex :

#^Bonjour#

Si vous placez le symbole « ^ » devant le mot, alors ce mot devra obligatoirement se trouver au début de la chaîne, sinon on vous répondra FAUX.

De même, si on veut vérifier que la chaîne se termine par « zéro », on écrira cette regex :





    Les quantificateurs
Les quantificateurs sont des symboles qui permettent de dire combien de fois peuvent se répéter un caractère ou une suite de caractères.
Par exemple, pour reconnaître une adresse e-mail comme francois@free.fr  , il va falloir dire : « Elle commence par une ou plusieurs lettres, suivie(s) d'une @  (arobase), suivie de deux lettres au moins, elles-mêmes suivies d'un point, et enfin de deux à quatre lettres (pour le .fr  , .com  ,   mais aussi .info  (eh oui, ça existe !).

Bon : pour le moment, notre but n'est pas d'écrire une regex qui permet de savoir si l'adresse e-mail rentrée par le visiteur a la bonne forme (c'est encore trop tôt). Mais tout ça pour vous dire qu'il est indispensable de savoir indiquer combien de fois une lettre peut se répéter !

Les symboles les plus courants
Vous devez retenir trois symboles :

?  (point d'interrogation) : ce symbole indique que la lettre est facultative. Elle peut y être 0 ou 1 fois.

Ainsi, #a?#  reconnaît 0 ou 1 « a » ;

+  (signe plus) : la lettre est obligatoire. Elle peut apparaître 1 ou plusieurs fois.

Ainsi, #a+#  reconnaît « a », « aa », « aaa », « aaaa », etc. ;

*  (étoile) : la lettre est facultative. Elle peut apparaître 0, 1 ou plusieurs fois.

Ainsi, #a*#  reconnaît « a », « aa », « aaa », « aaaa », etc. Mais s'il n'y a pas de « a », ça fonctionne aussi !





Être plus précis grâce aux accolades
Parfois, on aimerait indiquer que la lettre peut être répétée quatre fois, ou de quatre à six fois… bref, on aimerait être plus précis sur le nombre de répétitions.
C'est là qu'entrent en jeu les accolades. Vous allez voir : si vous avez compris les derniers exemples, ça va vous paraître tout simple.

Il y a trois façons d'utiliser les accolades.

{3} : si on met juste un nombre, cela veut dire que la lettre (ou le groupe de lettres s'il est entre parenthèses) doit être répétée 3 fois exactement.
#a{3}#  fonctionne donc pour la chaîne « aaa ».

{3,5} : ici, on a plusieurs possibilités. On peut avoir la lettre de 3 à 5 fois.
#a{3,5}#  fonctionne pour « aaa », « aaaa », « aaaaa ».

{3,} : si vous mettez une virgule, mais pas de 2e nombre, ça veut dire qu'il peut y en avoir jusqu'à l'infini. Ici, cela signifie « 3 fois ou plus ».
#a{3,}#  fonctionne pour « aaa », « aaaa », « aaaaa », « aaaaaa », etc. Je ne vais pas tous les écrire, ça serait un peu long.

En résumé
Les expressions régulières sont des outils de recherche et de remplacement de texte très avancés qui permettent d'effectuer des recherches très précises, pour vérifier par exemple que le texte saisi par l'utilisateur correspond bien à la forme d'une adresse e-mail ou d'un numéro de téléphone.

La fonction preg_match  vérifie si un texte correspond à la forme décrite par une expression régulière.

Une expression régulière est délimitée par un symbole (par exemple le dièse #  ).

Les classes de caractères permettent d'autoriser un grand nombre de symboles (lettres et chiffres) selon un intervalle.

Les quantificateurs permettent d'exiger la répétition d'une chaîne de texte un certain nombre de fois.

#zéro$#

preg_grep ;

preg_split ;

preg_quote ;

preg_match ;   

exemple pour preg_match





Raccourci

Signification

\d

Indique un chiffre.
Ça revient exactement à taper [0-9]

\D

Indique ce qui n'est PAS un chiffre.
Ça revient à taper [^0-9]

\w

Indique un caractère alphanumérique ou un tiret de soulignement.
Cela correspond à [a-zA-Z0-9_]

\W

Indique ce qui n'est PAS un mot.
Si vous avez suivi, ça revient à taper [^a-zA-Z0-9_]

\t

Indique une tabulation

\n

Indique une nouvelle ligne

\r

Indique un retour chariot

\s

Indique un espace blanc

\S

Indique ce qui n'est PAS un espace blanc ( \t \n \r  )

.

Indique n'importe quel caractère.
Il autorise donc tout !



<?php 

if (preg_match("#guitare#", "J'aime jouer de la guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
?>



preg_match_all ;

preg_replace ;

preg_replace_callback  .