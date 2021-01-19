 EXPLICATION INNER JOIN 

Jointure interne avec JOIN  (nouvelle syntaxe)
Bien qu'il soit possible de faire une jointure interne avec un WHERE  , comme on vient de le voir, c'est une ancienne syntaxe et aujourd'hui on recommande plutôt d'utiliser JOIN  . Il faut dire que nous étions habitués à utiliser le WHERE  pour filtrer les données, alors que nous l'utilisons ici pour associer des tables et récupérer plus de données.

Pour éviter de confondre le WHERE  « traditionnel » qui filtre les données et le WHERE  de jointure que l'on vient de découvrir, on va utiliser la syntaxe JOIN  .

Pour rappel, voici la requête qu'on utilisait avec un WHERE :

SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p, jeux_video j
WHERE j.ID_proprietaire = p.ID
Avec un JOIN  , on écrirait cette même requête de la façon suivante :

SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID
Cette fois, on récupère les données depuis une table principale (ici, proprietaires  ) et on fait une jointure interne ( INNER JOIN  ) avec une autre table ( jeux_video  ). La liaison entre les champs est faite dans la clause ON  un peu plus loin.

Le fonctionnement reste le même : on récupère les mêmes données que tout à l'heure avec la syntaxe WHERE  .

Si vous voulez filtrer ( WHERE  ), ordonner ( ORDER BY  ) ou limiter les résultats ( LIMIT  ), vous devez le faire à la fin de la requête, après le « ON j.ID_proprietaire = p.ID ».

Par exemple :

SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID
WHERE j.console = 'PC'
ORDER BY prix DESC
LIMIT 0, 10
Traduction (inspirez un grand coup avant de lire) : « Récupère le nom du jeu et le prénom du propriétaire dans les tables proprietaires  et jeux_video  , la liaison entre les tables se fait entre les champs ID_proprietaire  et ID  , prends uniquement les jeux qui tournent sur PC, trie-les par prix décroissant et ne prends que les 10 premiers. »

Il faut s'accrocher avec des requêtes de cette taille-là ! ;-)