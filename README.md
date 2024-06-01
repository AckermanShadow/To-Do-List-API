# Nom du Projet Laravel

## Description
Ceci est un projet Laravel pour créer une application de gestion de tâches (To-Do List).

## Installation
1. Clonez ce dépôt sur votre machine locale.
2. Assurez-vous d'avoir PHP, Composer et Node.js installés sur votre machine.
3. Exécutez la commande suivante pour installer les dépendances PHP :
    ```
    composer install
    ```
4. Dupliquez le fichier `.env.example` et renommez-le en `.env`.
5. Configurez votre base de données dans le fichier `.env` :
    ```dotenv
    DB_CONNECTION=sqlite
    DB_DATABASE=/chemin/absolu/vers/votre/fichier/database.sqlite
    ```
    Assurez-vous de spécifier le chemin absolu vers le fichier `database.sqlite` que vous avez créé pour votre base de données SQLite.
6. Exécutez la commande suivante pour générer la clé d'application :
    ```
    php artisan key:generate
    ```
7. Exécutez la commande suivante pour créer les tables de base de données :
    ```
    php artisan migrate
    ```

## Utilisation
1. Pour démarrer le serveur de développement, exécutez la commande suivante :
    ```
    php artisan serve
    ```
2. Accédez à l'URL indiquée dans la console pour voir l'application en cours d'exécution.

## Fonctionnalités
- Ajouter une nouvelle tâche.
- Marquer une tâche comme complétée.
- Supprimer une tâche.
- Afficher la liste des tâches avec une distinction claire entre les tâches complétées et non complétées.

## Structure du Projet
- `/app`: Contient le code source de l'application Laravel.
  - `/Http/Controllers`: Contrôleurs de l'application.
  - `/Models`: Modèles de données de l'application.
- `/database`: Contient les migrations et les seeds pour la base de données.
- `/resources/views`: Vues Blade de l'application.
- `/routes`: Définition des routes de l'application.
- `/public`: Contient les fichiers statiques accessibles publiquement.
- `/tests`: Tests unitaires et fonctionnels de l'application.

## Contributions
Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, veuillez créer une nouvelle branche à partir de la branche `develop`, effectuer vos modifications et soumettre une demande de tirage.

## Licence
Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.
