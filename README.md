# SAVEUR

# NT1_RESTAURANT_ABINASH_ROY

## Présentation

Site vitrine de restaurant avec système de réservation simple, développé en **HTML / CSS / JS / PHP** et **MySQL**.  

## Pré-requis

Avant de commencer, assurez-vous d'exécuter le fichier `schema.sql` pour créer la base de données `saveur_restaurant` avant de lancer le site web. Sinon, les fonctionalités présent sur le site ne fonctionnerons pas correctement.

## Technologies utilisées

- **Frontend :**
  - HTML5, CSS3 (dossier `/style`)
  - JavaScript natif (dossier `/script`)
  - Responsive et structure simple

- **Backend :**
  - PHP (>= 7.x)
  - PDO pour la connexion MySQL
  - Structure **DAO** pour séparer les requêtes SQL

- **Base de données :**
  - MySQL ou MariaDB
  - Script `schema.sql` pour créer les tables nécessaires

- **Serveur local :**
  - WAMP, XAMPP ou tout environnement Apache + MySQL + PHP

## Arborescence du projet

```plaintext
NT1_RESTAURANT_ABINASH_ROY/
│
├── public/               # Point d'entrée web
│   ├── index.php         # Page d'accueil
│   ├── log.php           # Connexion
│   ├── register.php      # Inscription
│   ├── reservation.php   # Formulaire réservation
│   ├── auth.php          # Logique login/logout/register
│   ├── style/
│   │   └── styles.css    # Fichiers CSS
│   ├── script/
│   │   └── main.js       # Fichiers JS
├── src/                  # Code métier
│   ├── Database.php
│   ├── UserDAO.php
│   ├── ReservationDAO.php
│
├── config/               # Scripts de configuration
│   ├── schema.sql
│   ├── test_db.php
│
└── README.md
