<?php
/**
 * Fichier de configuration general de l'application
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environnement d'exécution
 * 3. Définition des variables de base de données
 * 4. Définition des variables de routage
 * 5. Definition des exepressions régulières
 */
/**
 * 1. Définition des constantes
 */
// Definition du titre du site
define('WEBSITE_TITLE', "WebPizza, les meilleurs pizzas du WEB !");
// Definir le chemin du répertoire "utils"
define('UTILS_PATH', "../utils/");
/**
 * 2. Définition des variables d'environnement d'exécution
 */
// Environnement de développement ou production ?
// les valeur peuvent être : "prod" ou "dev"
// Par défaut, on considère que l'application s'exécute en environnement de PROD
$env = "prod";
// Liste des domaines que l'on considères comme étant des environnements de développement
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "webpizza.local"
];
/**
 * 3. Définition des variables de base de données
 */
// Liste des configurations de connections aux bases de données par défaut
$db_config = [];
// Liste des connections aux bases de données
// Cette liste sera nourris par le fichier db_connect.php
$db = [];
// Inclusion de la config de la base de données
require_once "database.php";
/**
 * 4. Définition des variables de routage
 */
// Definition de l'uri par défaut
$uri = "/";

// Definition de table de routage par défaut
$routes = [];

// Contient les informations de la route courante
$route = [];

// Inclusion de la route de config
require_once "routes.php";



/**
 * 5. Definition des exepressions régulières
 */