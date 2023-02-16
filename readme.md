Projet de gestion de médicaments et d'utilisateurs
Ce projet Symfony vise à gérer les médicaments et les types d'individus les utilisant.

Prérequis
Avant d'installer le projet, vous devez vous assurer d'avoir les éléments suivants installés sur votre machine :

git
php (version >= 7.2.5) avec l'extension permettant d'interagir avec MySQL
MySQL
Composer
Symfony et Symfony CLI
Installation
Étape 1 : Cloner le projet
Ouvrez un terminal et exécutez la commande suivante :

bash
Copy code
git clone https://github.com/ort-montreuil/bts-alt-g2-2021.git
Étape 2 : Créer un fichier .env
Créez un fichier .env à partir du modèle ci-dessous :

bash
Copy code
# Run "composer dump-env prod" to compile .env files for production use (requires symfony/flex >=1.2).
# https://symfony.com/doc/current/best_practices.html#use-environment-variables-for-infrastructure-configuration

###> symfony/framework-bundle ###
APP_ENV=dev
APP_SECRET=81710bdc5d18e57e2c066e7f03a8cb22
VERSION=0.0.1
#TRUSTED_PROXIES=127.0.0.0/8,10.0.0.0/8,172.16.0.0/12,192.168.0.0/16
#TRUSTED_HOSTS='^(localhost|example\.com)$'
###< symfony/framework-bundle ###

###> symfony/mailer ###
# MAILER_DSN=smtp://localhost
###< symfony/mailer ###

###> doctrine/doctrine-bundle ###
# Format described at https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url
# For an SQLite database, use: "sqlite:///%kernel.project_dir%/var/data.db"
# For a PostgreSQL database, use: "postgresql://db_user:db_password@127.0.0.1:5432/db_name?serverVersion=11&charset=utf8"
# IMPORTANT: You MUST configure your server version, either here or in config/packages/doctrine.yaml
DATABASE_URL=mysql://<username>:<password>@<host>:<port>/<database_name>
###< doctrine/doctrine-bundle ###
Remplacez les valeurs suivantes :

<username> : le nom d'utilisateur de votre base de données
<password> : le mot de passe de votre base de données
<host> : l'hôte de votre base de données
<port> : le port de votre base de données
<database_name> : le nom de la base de données que vous utiliserez pour ce projet
Étape 3 : Installer les dépendances
Ouvrez un terminal à la racine du projet et exécutez la commande suivante :

Copy code
composer install
Étape 4 : Lancer le projet
Ouvrez un terminal à la racine du projet et exécutez la commande suivante :

Copy code
symfony serve
Le projet sera accessible à l'adresse http://localhost:8000.

Assurez-vous que votre serveur MySQL est lancé et que les informations de connexion dans le fichier .env sont correctes.