<?php
/**
 * Fichier de configuration des connections aux bases de données
 */
$db_config = [
    // Base de données principale
    "main" => [             // Nom de la connection, utilisé uniquement dans nos fichiers PHP. donnera $db['main']
        "type" => "mysql",       // Type de SGBD
        "host" => "127.0.0.1",       // Adresse du serveur de base de donnée
        "port" => "3306",       // Port de connection
        "user" => "root",       // Nom d'utilisateur de la BDD
        "pass" => "",       // Mot de passe de l'utilisateur
        "schema" => "wf3_webpizza",     // Nom de la base de données
        "charset" => "utf8" // Jeu de caractère de la base de donnée
    ]
];