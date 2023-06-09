# KBM Fleetness
# Projet de Gestion des Salles de Sport et Inscriptions

Ce projet est développé avec Symfony 6.2 et vise à fournir un système de gestion des salles de sport, ainsi que des fonctionnalités d'inscription des utilisateurs.

## Installation

Assurez-vous d'avoir les prérequis suivants avant d'installer le projet :

- PHP 7.4 ou version supérieure
- Composer
- Node.js et npm

Suivez les étapes ci-dessous pour installer et exécuter le projet :

1. Clonez ce dépôt Git sur votre machine locale :

```bash
git clone https://github.com/IssamLammri/kbm_fetnees.git
```

2. Accédez au répertoire du projet :

```bash
cd projet-gestion-salles-sport
```

3. Accédez au répertoire du projet :

```bash
composer install
```
4. Installez les dépendances JavaScript à l'aide de npm et Générez les assets (CSS et JavaScript) ::

```bash
npm install
npm run build
```
5. Configurez les variables d'environnement en créant un fichier .env.local à la racine du projet et en y ajoutant les valeurs nécessaires, par exemple :

```bash
APP_ENV=dev
APP_SECRET=your_secret_key
DATABASE_URL=your_database_url
```

6. Créez la base de données et exécutez les migrations :

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

7. Lancez le serveur de développement Symfony

```bash
symfony server start
```


8. Accédez à l'URL http://localhost:8000 dans votre navigateur pour utiliser l'application.