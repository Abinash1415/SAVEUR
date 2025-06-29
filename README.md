# SAVEUR

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

## Arborescence

```plaintext
SAVEUR/
│
├── public/      
│   ├── index.php    
│   ├── log.php      
│   ├── register.php  
│   ├── reservation.php 
│   ├── auth.php     
│   ├── style/
│   │   └── styles.css
│   ├── script/
│   │   └── main.js      
├── src/   
│   ├── Database.php
│   ├── UserDAO.php
│   ├── ReservationDAO.php
│
├── config/
│   ├── schema.sql
│   ├── test_db.php
│
└── README.md
