<!-- fonctions gestion de dates 

lien utiles : https://dev.mysql.com/doc/refman/5.7/en/date-and-time-functions.html -->


<!-- NOW() : obtenir la date et l'heure actuelles
C'est probablement une des fonctions que vous utiliserez le plus souvent.
Lorsque vous insérerez un nouveau message dans la base, vous souhaiterez enregistrer la date actuelle les 99 % du temps. Pour cela, rien de plus simple avec la fonction NOW() :

INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', NOW()) -->


<!-- /////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


<!-- Notez qu'il existe aussi les fonctions CURDATE()  et CURTIME()  qui retournent respectivement uniquement la date (AAAA-MM-JJ) et l'heure (HH:MM:SS). -->


<!-- /////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


<!-- DAY()  , MONTH()  , YEAR() : extraire le jour, le mois ou l'année
Extraire des informations d'une date ? C'est facile ! Voici un exemple d'utilisation :

SELECT pseudo, message, DAY(date) AS jour FROM minichat
On récupèrera trois champs : le pseudo, le message et le numéro du jour où il a été posté.

HOUR()  , MINUTE()  , SECOND() : extraire les heures, minutes, secondes
De la même façon, avec ces fonctions il est possible d'extraire les heures, minutes et secondes d'un champ de type DATETIME  ou TIME  .

SELECT pseudo, message, HOUR(date) AS heure FROM minichat -->


<!-- /////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<!-- La fonction DATE_FORMAT  vous permet d'adapter directement la date au format que vous préférez. 
Il faut dire que le format par défaut de MySQL (AAAA-MM-JJ HH:MM:SS) n'est pas très courant en France.

Voici comment on pourrait l'utiliser :

SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat

Ainsi, on récupèrerait les dates avec un champ nommé date  sous la forme 11/03/2010 15h47min49s. -->


<!-- /////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


<!-- Par exemple, supposons que l'on souhaite afficher une date d'expiration du message. Celle-ci correspond à « la date où a été posté le message + 15 jours ».
 Voici comment écrire la requête :

SELECT pseudo, message, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat

Le champ date_expiration  correspond à « la date de l'entrée + 15 jours ». 
Le mot-clé INTERVAL  ne doit pas être changé ; en revanche, vous pouvez remplacer DAY  par MONTH  ,YEAR  , HOUR  , MINUTE  , SECOND  , etc. Par conséquent, 
si vous souhaitez indiquer que les messages expirent dans deux mois :

SELECT pseudo, message, DATE_ADD(date, INTERVAL 2 MONTH) AS date_expiration FROM minichat -->

<!-- /////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->





<!-- /////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->