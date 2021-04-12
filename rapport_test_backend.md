# Test développeur back-end

J'ai réalise le test technique avec le framework laravel 8.0.

Pour m'assurer que le programme fonctionne avec l'environnement exigé dans le cahier des charges (PHP 7.X via PHP-FPM
MySQL 5.7.X Ou MariaDb 10.3.X
NGINX 1.15.X) , j'ai utilisé docker. J'ai créé 2 fichiers docker.yml qui décris les conteneurs à créer (serveur nginx, serveur ) et dockerfile, ou les etapes d'installation des diffferents 

Il faudra lancer la commande docker-compose up -d pour pouvoir lancer le service php, le service de la base de données et ainsi celui du serveur nginx.
Une fois les services actifs, il faudra se rendre sur l'url suivante :
http://127.0.0.1:8100/api/

Pour générer des données de test, il faudra utiliser la commande 
docker-compose exec app php artisan db:seed 
pour générer les diffèrents tweets de test.

Voici les routes correspondant aux diffèrentes fonctionnalitées:

Get Api/tweets
Voir tous les tweets les 25 1ers

Get Api/tweets/count/y

Get Api/tweets/count/y/page/n
Voir les tweets de la page n et y tweets par page

Get Api/tweets/page/n
Voir les tweets de la page n

Get Api/tweets/author/n
Voir les tweets redigés par l'auteur n

Get Api/tweets/hashtag/n
Voir les tweets contentant les hashtags dans n

Get Api/tweets/
Post Api/tweets/create
Créer un tweet avec l'auteur, le message et les hashtags:

il faut ajouter les paramètres suivants :

