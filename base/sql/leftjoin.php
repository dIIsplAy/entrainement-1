Les jointures externes
Les jointures externes permettent de récupérer toutes les données, même celles qui n'ont pas de correspondance. On pourra ainsi obtenir Romain Vipelli dans la liste, même s'il ne possède pas de jeu vidéo.

Cette fois, la seule syntaxe disponible est à base de JOIN  . Il y a deux écritures à connaître : LEFT JOIN  et RIGHT JOIN  . Cela revient pratiquement au même, avec une subtile différence que nous allons voir.

LEFT JOIN : récupérer toute la table de gauche
Reprenons la jointure à base de INNER JOIN  et remplaçons tout simplement INNER  par LEFT :

SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
LEFT JOIN jeux_video j
ON j.ID_proprietaire = p.ID
proprietaires  est appelée la « table de gauche » et jeux_video  la « table de droite ». Le LEFT JOIN  demande à récupérer tout le contenu de la table de gauche, donc tous les propriétaires, même si ces derniers n'ont pas d'équivalence dans la table jeux_video  .



Romain apparaît désormais dans les résultats de la requête grâce à la jointure externe. Comme il ne possède aucun jeu, la colonne du nom du jeu est vide.

RIGHT JOIN : récupérer toute la table de droite
Le RIGHT JOIN  demande à récupérer toutes les données de la table dite « de droite », même si celle-ci n'a pas d'équivalent dans l'autre table. Prenons la requête suivante :

SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
RIGHT JOIN jeux_video j
ON j.ID_proprietaire = p.ID
La table de droite est « jeux_video ». On récupèrerait donc tous les jeux, même ceux qui n'ont pas de propriétaire associé.