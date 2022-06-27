<?php

/*
    DB
*/

$host = 'localhost';
$dbname = 'studnets';
$charset = 'utf8';

$dsn = "mysql: host=$host; dbname=$dbname; charset=$charset";

$username = "root";
$password = "root";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $dberror = $e->getMessage();
}
