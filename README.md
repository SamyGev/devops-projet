# V1 complete du projet

- utilisation d'une image disponible ici https://hub.docker.com/repository/docker/samygevers/devops-php-python/
- il y a un dockerfile, un docker-compose
- le dockerfile créé une image de l'api flask
- le docker-compose créé une image a partir de celle fraichement créé, et une autre pour le front (en php)
- les containers sont sur le même réseau
- un volume de type volume pour le json
- un volume monté pour le front
- l'appli est fonctionnelle, le back est sur le port 5000 et le front 8082, on peut rajouter des noms, supprimer les containers, en faire de nouveaux, on a une persistence des données
- chargement du front après le back
- On a fait du python et du php pour que l'appli soit plus simple d'utilisation, on rempli le formulaire et on peut voir directement les changements