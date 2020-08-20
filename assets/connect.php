<?php

// Connexion à BDD
// PDO PHP Databases objects

$pdo = new PDO(
    'mysql:host=localhost;charset=utf8;dbname=dorancodb;port=3306',
    'root',
    '',
    array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    )
);

