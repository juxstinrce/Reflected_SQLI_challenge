# Reflected_SQL_injection
Objectif:
  - Devenir administrateur
  
Étapes:
  - Exploiter une XSS
  - Exploiter une SQLi Reflected
  - Accéder au panel admin de manière à récupérer le mot de passe de validation

# Utile
Je vous recommande les liens suivants avant de vous attaquer au challenge:
  - https://portswigger.net/kb/issues/00200331_client-side-sql-injection-reflected-dom-based
  - https://sql.sh/
  - https://www.owasp.org/index.php/SQL_Injection

# Configuration
Étapes nécessaires afin de configurer le challenge correctement:
  - Veillez à bien changer les credentials de votre base de donnée présent de le fichier config/db.php
  - Importez la base de donnée challenge.sql sur votre SGDB.
  - Créer un système de bot (faisable via tâche CRON) qui visite le fichier bot/log.html toutes les minutes. 
  - Le challenge est libre de droit, réutilisable et modifiable. N'hésitez pas à me faire parvenir vos modifications.

# Architecture de la BDD
Cette information est à divulguée d'une manière ou d'une autre (fichier index.php.bak ?) c'est pourquoi je la divulgue ici:
  - La base de donnée est consitutée d'une table "users"
  - La table "users" est constituée de 4 colonnes : "username", "password", "admin", "views"
  - Lors de l'inscription, la valeur 0 est assigné à la colonne "admin"

# Creds
Le front-end utilisé provient du site https://root-me.org (que je recommande).
