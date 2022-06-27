<?php

/*
    DB
*/

// Hôte
$host = 'localhost';

// Nom de la base de données
$dbname = 'studnets';

// Encodage des données
$charset = 'utf8';

// Data Source Name
$dsn = "mysql: host=$host; dbname=$dbname; charset=$charset";

// Se connecter à la base de données
$username = "root";
$password = "root";

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $dberror = $e->getMessage();
}
