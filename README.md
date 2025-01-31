# 📌 Installation du projet Symfony

## 🚀 Prérequis

Avant de commencer, assure-toi d'avoir installé les éléments suivants :

- [Git](https://git-scm.com/)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [PHP 8.x](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [Symfony CLI](https://symfony.com/download)

---

## 📥 1. Cloner le projet

```sh
git clone https://github.com/silamakanK/shapeofyou.git
cd shapeofyou
```

---

## ⚙️ 2. Configuration de l'environnement

Duplique le fichier `.env.example` en `.env` et adapte les variables si nécessaire :

```sh
cp .env.example .env
```

---

## 🐳 3. Lancer les services Docker (MySQL & phpMyAdmin)

```sh
docker-compose up -d
```

Vérifie que les conteneurs sont bien lancés :

```sh
docker ps
```

Tu peux accéder à **phpMyAdmin** ici : [http://localhost:8080](http://localhost:8080)

---

## 📦 4. Installer les dépendances PHP & JavaScript

```sh
composer install
```

---

## 🛠 5. Générer la base de données

```sh
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

Si tu veux charger des données de test :

```sh
php bin/console doctrine:fixtures:load
```

---

## ▶️ 6. Lancer le serveur Symfony

```sh
symfony serve -d
```

Le projet est maintenant accessible sur : [http://127.0.0.1:8000](http://127.0.0.1:8000)

---


