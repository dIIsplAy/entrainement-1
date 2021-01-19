<!-- les date en sql -->

<!-- Les différents types de dates
Voici les différents types de dates que peut stocker MySQL :

DATE : stocke une date au format AAAA-MM-JJ (Année-Mois-Jour) ;

TIME : stocke un moment au format HH:MM:SS (Heures:Minutes:Secondes) ;

DATETIME : stocke la combinaison d'une date et d'un moment de la journée au format AAAA-MM-JJ HH:MM:SS. Ce type de champ est donc plus précis ;

TIMESTAMP : stocke le nombre de secondes passées depuis le 1er janvier 1970 à 00 h 00 min 00 s ;

YEAR : stocke une année, soit au format AA, soit au format AAAA. -->


<!-- ////////////////////////////////////////////////////////////////////////////// -->



<!-- Utilisation des champs de date en SQL
Les champs de type date  s'utilisent comme des chaînes de caractères : il faut donc les entourer d'apostrophes. Vous devez écrire la date dans le format du champ.

Par exemple, pour un champ de type DATE :

SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02' -->


<!-- ////////////////////////////////////////////////////////////////////////////// -->



<!-- recuperer des message entre deux date 

Ou même la liste de tous les messages postés entre le 02/04/2010 et le 18/04/2010 :

SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' AND date <= '2010-04-18 00:00:00' -->



<!-- ////////////////////////////////////////////////////////////////////////////// -->



<!-- En SQL, pour récupérer des données comprises entre deux intervalles, comme ici, il y a une syntaxe plus simple et plus élégante avec le mot-clé BETWEEN  qui signifie « entre ». 
On pourrait écrire la requête précédente comme ceci :

SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00' AND '2010-04-18 00:00:00'

Cela signifie : « récupérer tous les messages dont la date est comprise entre 2010-04-02 00:00:00 et 2010-04-18 00:00:00 ». 
Vous pouvez aussi utiliser cette syntaxe sur les champs contenant des nombres. -->



