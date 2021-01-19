<!-- exemple de fonctions d'agregat -->



<!-- AVG : calcule la moyenne d'un champ contenant des nombre exemple : SELECT AVG(prix) AS prix_moyen FROM jeux_video -->

<!-- SUM : additionner les valeurs
La fonction SUM  permet d'additionner toutes les valeurs d'un champ. Ainsi, on pourrait connaître la valeur totale des jeux appartenant à Patrick :

SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick' -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->



<!-- MAX : retourner la valeur maximale
Cette fonction analyse un champ et retourne la valeur maximale trouvée. Pour obtenir le prix du jeu le plus cher :

SELECT MAX(prix) AS prix_max FROM jeux_video -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->




<!-- MIN : retourner la valeur minimale
De même, on peut obtenir le prix du jeu le moins cher :

SELECT MIN(prix) AS prix_min FROM jeux_video -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->



<!-- COUNT : compter le nombre d'entrées
La fonction COUNT  permet de compter le nombre d'entrées. Elle est très intéressante mais plus complexe. On peut en effet l'utiliser de plusieurs façons différentes.

L'utilisation la plus courante consiste à lui donner *  en paramètre :

SELECT COUNT(*) AS nbjeux FROM jeux_video -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- utilisé le parametre distinct pour approfondire la requette et différencier les doublon -->

<!-- SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- 

Voici un exemple d'utilisation de GROUP BY :

SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console -->

<!-- Il faut utiliser GROUP BY  en même temps qu'une fonction d'agrégat, sinon il ne sert à rien. Ici, on récupère le prix moyen et la console, et on choisit de grouper par console.
 Par conséquent, on obtiendra la liste des différentes consoles de la table et le prix moyen des jeux de chaque plateforme ! -->


 <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->



 <!-- HAVING : filtrer les données regroupées
HAVING  est un peu l'équivalent de WHERE  , mais il agit sur les données une fois qu'elles ont été regroupées. C'est donc une façon de filtrer les données à la fin des opérations.

Voyez la requête suivante : -->

<!-- SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10 -->
